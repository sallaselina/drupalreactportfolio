import { useEffect, useState } from "react";
import { fetchContent } from "../services/api";

const About = () => {
  const [content, setContent] = useState(null);

  useEffect(() => {
    fetchContent("jsonapi/node/about_me")
      .then((data) => {
        setContent(data.data[0]);
      })
      .catch((error) => {
        console.error("error message", error);
      });
  }, []);

  return (
    <div className="about-page d-flex">
      <div className="d-flex w-100 justify-content-center">
        <div className="d-flex justify-content-center align-items-center">
          {content && content.attributes && content.attributes.body ? (
            <div className="m-2 p-5 bg-own w-75 rounded">
              <h1>About me</h1>
              <p
                dangerouslySetInnerHTML={{
                  __html: content.attributes.body.value,
                }}
              />
            </div>
          ) : (
            <h4> About page will be here soon! </h4>
          )}
        </div>
      </div>
    </div>
  );
};

export default About;
