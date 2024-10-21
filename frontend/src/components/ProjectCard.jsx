import { Col, Container } from "react-bootstrap";

const ProjectCard = ({ project }) => {
  return (
    <div className="p-2 m-2 project-card text-center bg-info rounded w-25 h-25">
      <Container>
        <Col>
          <h2>{project.attributes.title}</h2>
          <p>{project.attributes.body.value}</p>
          <img
            src="../../../web/sites/default/files/2024-10/Screenshot%202024-10-18%20at%2015-33-37%20Vite%20React%20TS.png"
            alt=""
          ></img>
        </Col>
      </Container>
    </div>
  );
};

export default ProjectCard;
