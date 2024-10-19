import React, { useEffect, useState } from "react";
import { fetchContent } from "../services/api";
import Spinner from "react-bootstrap/Spinner";
import Image from "react-bootstrap/Image";
import Col from "react-bootstrap/Col";

const Home = () => {
  const [content, setContent] = useState(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    fetchContent("node/home")
      .then((data) => {
        // console.log("Fetched data:", data);
        setContent(data.data[0]);
        setLoading(false);
      })
      .catch((error) => {
        console.error("Error fetching content:", error);
        setError(error);
        setLoading(false);
      });
  }, []);

  if (loading) {
    return (
      <Spinner animation="border" role="status" className="center">
        <span> Loading...</span>
      </Spinner>
    );
  }

  if (error) {
    return <div>Error loading content: {error.message}</div>;
  }

  return (
    <div>
      <h1>Home</h1>
      <Col>
        <Image src="../assets/salla_winter.JPG" fluid />
      </Col>
      <h2> Welcome to my portfolio!</h2>
      {content && content.attributes && content.attributes.body ? (
        <div
          dangerouslySetInnerHTML={{ __html: content.attributes.body.value }}
        />
      ) : (
        <div>No content available</div>
      )}
    </div>
  );
};

export default Home;
