import { useEffect, useState } from "react";
import { fetchContent } from "../services/api";

const About = () => {
  const [content, setContent] = useState(null);

  useEffect(() => {
    fetchContent("node/about_me")
      .then((data) => {
        setContent(data.data[0]);
      })
      .catch((error) => {
        console.error("error message", error);
      });
  }, []);

  return (
    <div>
      <h1>About</h1>
      {content && content.attributes && content.attributes.body ? (
        <div>
          <h3 dangerouslySetInnerHTML={{ __html: content.attributes.title }} />
          <p
            dangerouslySetInnerHTML={{ __html: content.attributes.body.value }}
          />
        </div>
      ) : (
        <h4> About page will be here soon! </h4>
      )}
    </div>
  );
};

export default About;
