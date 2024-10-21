import { useEffect, useState } from "react";
import { fetchContent } from "../services/api";
import Spinner from "react-bootstrap/Spinner";
import Image from "react-bootstrap/Image";
import picture from "../assets/salla-winter.png";
import { Row } from "react-bootstrap";

const Home = () => {
  const [content, setContent] = useState(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    fetchContent("jsonapi/node/home")
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
        <span className="visually-hidden"> Loading...</span>
      </Spinner>
    );
  }

  if (error) {
    return <div>Error loading content: {error.message}</div>;
  }

  return (
    <div className="home-page d-flex align-items-center ">
      <div className="m-5 p-7 home-text w-100 rounded d-inline ">
        <h1 className="m-2 float-left">Welcome to my portfolio!</h1>
        <div className="d-inline float-right">
          <Row>
            <Image
              src={picture}
              roundedCircle
              className="m-2 p-2 w-25 h-25"
            ></Image>

            {content && content.attributes && content.attributes.body ? (
              <p
                className="m-2 p-2 w-50 text-left"
                dangerouslySetInnerHTML={{
                  __html: content.attributes.body.value,
                }}
              />
            ) : (
              <div>No content available</div>
            )}
          </Row>
        </div>
      </div>
    </div>
  );
};

export default Home;
