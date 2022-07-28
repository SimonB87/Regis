// duplicate rows
INSERT INTO registrations
    (orderID, eventID, eventName, clientName, passType, registrationType, dancerKind, otherTicketOptions, competitionParticipation, location, merchandise, formPrice, clientEmail, clientPhone, clientCountry, clientComments, registrationdate, confirmPrivateInformation1, confirmPrivateInformation2, confirmPrivateInformation3, confirmPrivateInformation1Description, confirmPrivateInformation2Description, confirmPrivateInformation3Description, paystatus, clientTransferedOrder, adminEditedOrder)
SELECT 
    orderID, eventID, eventName, clientName, passType, registrationType, dancerKind, otherTicketOptions, competitionParticipation, location, merchandise, formPrice, clientEmail, clientPhone, clientCountry, clientComments, registrationdate, confirmPrivateInformation1, confirmPrivateInformation2, confirmPrivateInformation3, confirmPrivateInformation1Description, confirmPrivateInformation2Description, confirmPrivateInformation3Description, paystatus, clientTransferedOrder, adminEditedOrder
FROM 
    registrations
WHERE 
    id = '145' ;

// registration columns names
id, orderID, eventID, eventName, clientName, passType, registrationType, dancerKind, otherTicketOptions, competitionParticipation, location, merchandise, formPrice, clientEmail, clientPhone, clientCountry, clientComments, registrationdate, confirmPrivateInformation1, confirmPrivateInformation2, confirmPrivateInformation3, confirmPrivateInformation1Description, confirmPrivateInformation2Description, confirmPrivateInformation3Description, paystatus, clientTransferedOrder, adminEditedOrder
