import { useEffect, useState } from "react";
import { fetchContent } from "../services/api";
import Spinner from "react-bootstrap/Spinner";

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
    <>
      <div className="home-page d-flex align-items-center justify-content-center">
        <div className="home-text w-100 rounded d-flex align-items-center">
          <h1 className="m-1">Hi there, I'm Salla!</h1>

          {content && content.attributes && content.attributes.body ? (
            <p
              className="m-2 p-2 w-50 text-center"
              dangerouslySetInnerHTML={{
                __html: content.attributes.body.value,
              }}
            />
          ) : (
            <div>No content available</div>
          )}
        </div>
      </div>
    </>
  );
};

export default Home;
