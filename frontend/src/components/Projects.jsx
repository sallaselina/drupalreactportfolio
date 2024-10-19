import { useEffect, useState } from "react";
import { fetchContent } from "../services/api";

const Projects = () => {
  const [projectList, setProjectList] = useState([]);
  useEffect(() => {
    fetchContent("node/projects")
      .then((data) => {
        setProjectList(data.data[0]);
      })
      .catch((error) => {
        console.error("error message", error);
      });
  }, []);
  return (
    <div>
      <h1>Projects</h1>
      {projectList && projectList.attributes && projectList.attributes.body ? (
        <div
          dangerouslySetInnerHTML={{
            __html: projectList.attributes.body.value,
          }}
        />
      ) : (
        <div>No projects yet! </div>
      )}
      {/* <h2>{projectList.attributes.body.value}</h2> */}
    </div>
  );
};

export default Projects;
