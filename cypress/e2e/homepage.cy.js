describe('homepage', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/homepage')
    cy.get(':nth-child(2) > .nav-link').click()
    cy.get(':nth-child(3) > .nav-link').click()
    cy.get(':nth-child(4) > .nav-link').click()
    cy.get(':nth-child(1) > .nav-link').click()
  })
})