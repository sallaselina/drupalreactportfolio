import { useEffect, useState } from "react";
import { fetchContent } from "../services/api";
import { Col } from "react-bootstrap";
// import ProjectCard from "./ProjectCard";

const Projects = () => {
  const [projectList, setProjectList] = useState([]);
  useEffect(() => {
    fetchContent("jsonapi/node/projects")
      .then((data) => {
        setProjectList(data.data);
      })
      .catch((error) => {
        console.error("error message", error);
      });
  }, []);
  return (
    <div className="project-page">
      <h1 className="mt-4 pt-3">Projects</h1>
      <div className="m-5 p-5 d-flex justify-content-center align-items-center">
        {projectList.map((project) => (
          <div key={project.id} className="m-2 p-2 projectCard w-50 rounded">
            <Col>
              <h2>{project.attributes.title}</h2>
            </Col>
            <Col>
              <p>{project.attributes.body.value}</p>
            </Col>
            <Col>
              {/*      <a
                href={`${project.attributes?.field_link_to_github_or_deployed.uri}`}
                target="_blank"
              >
                See code here
              </a> */}
              {/* <ProjectCard project={project} /> */}
            </Col>
          </div>
        ))}
      </div>
    </div>
  );
};

export default Projects;
