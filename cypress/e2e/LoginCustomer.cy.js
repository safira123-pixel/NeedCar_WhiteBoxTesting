describe('Login Customer', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/homepage/login')
    cy.get('body')
    cy.get('#email').type("user@gmail.com")
    cy.get('#password').type("useruser")
    cy.get('.btn-primary').click()
    cy.get(':nth-child(2) > .nav-link').click()
    cy.get('.navbar-brand').click()
    cy.get(':nth-child(3) > .nav-link').click()
    cy.get(':nth-child(5) > .nav-link').click()
    cy.get('#exampleModalLong > .modal-dialog > .modal-content > .modal-footer > .btn').click()
  })
})