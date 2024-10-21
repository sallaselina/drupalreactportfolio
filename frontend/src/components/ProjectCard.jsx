import { Col, Container } from "react-bootstrap";

const ProjectCard = ({ project }) => {
  return (
    <div className="p-2 m-2 project-card text-center rounded w-25 h-25">
      <Container>
        <Col>
          <h2>{project.attributes.title}</h2>
          <p>{project.attributes.body.value}</p>
        </Col>
      </Container>
    </div>
  );
};

export default ProjectCard;
