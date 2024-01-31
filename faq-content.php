<?php
$faqData = array(
    array(
        'question' => 'What is cybercrime',
        'answer' => 'Cybercrime refers to all the activities done with criminal intent in cyberspace. Because of the anonymous nature of the internet, miscreants engage in a variety of criminal activities. The field of cybercrime is just emerging and new forms of criminal activities in cyberspace are coming to the forefront with each passing day.'
    ),
    array(
        'question' => 'Do we have an exhaustive definition of Cybercrime',
        'answer' => 'No, unfortunately we don’t have an exhaustive definition of cybercrime. However, any online activity which basically offends human sensibilities can be regarded as a cybercrime.'
    ),
    array(
        'question' => 'What are the various categories of Cybercrimes',
        'answer' => 'Cybercrimes can be basically divided into three major categories:

        Cybercrimes against persons,
        Cybercrimes against property, and
        Cybercrimes against Government.'
    ),
    array(
        'question' => 'Tell us more about Cybercrimes against persons',
        'answer' => 'Cybercrimes committed against persons include various crimes like transmission of child pornography, harassment using e-mails and cyber-stalking. Posting and distributing obscene material is one of the most important Cybercrimes known today.'
    ),
    array(
        'question' => 'Is Cyber harassment also a Cybercrime',
        'answer' => 'Cyber harassment is a distinct cybercrime. Various kinds of harassment does occur in cyberspace. Harassment can be sexual, racial, religious, or other. Cyber harassment as a crime also brings us to another related area of violation of privacy of netizens. Violation of privacy of online citizens is a Cybercrime of a grave nature.'
    ),
    array(
        'question' => 'What are cybercrimes against property',
        'answer' => 'Cybercrimes against all forms of property include unauthorized computer trespassing through cyberspace, computer vandalism, transmission of harmful programs, and unauthorized possession of computerized information.'
    ),
    array(
        'question' => 'Is hacking a Cybercrime',
        'answer' => 'Hacking is amongst the gravest Cybercrimes known till date. It is a dreadful feeling to know that a stranger has broken into your computer system without your knowledge and has tampered with precious confidential data.

        The bitter truth is that no computer system in the world is hacking proof. It is unanimously agreed that any system, however secure it might look, can be hacked. The recent denial of service attacks seen over the popular commercial sites like E-bay, Yahoo, and Amazon are a new category of Cybercrimes which are slowly emerging as being extremely dangerous.
        
        Using one’s own programming abilities to gain unauthorized access to a computer or network is a very serious crime. Similarly, the creation and dissemination of harmful computer programs which do irreparable damage to computer systems is another kind of Cybercrime.'
    ),
    array(
        'question' => 'What is Vishing',
        'answer' => 'Vishing is the criminal practice of using social influence over the telephone system, most often using features facilitated by Voice over IP (VoIP), to gain access to sensitive information such as credit card details from the public. The term is a combination of “Voice” and phishing.'
    ),
    array(
        'question' => 'What is Mail Fraud',
        'answer' => 'Mail fraud is an offense under United States federal law, which includes any scheme that attempts to unlawfully obtain money or valuables in which the postal system is used at any point in the commission of a criminal offense.'
    ),
    array(
        'question' => 'What are Bots',
        'answer' => 'Bots are one of the most sophisticated types of crime-ware facing the internet today. Bots earn their unique name by performing a wide variety of automated tasks on behalf of the cyber criminals. They play a part in “denial of service” attack in internet.'
    ),
    // Add more FAQ items as needed
);

foreach ($faqData as $index => $faqItem) {
    echo '<div class="faq-item">';
    echo '<h3 class="faq-question" onclick="toggleAnswer(' . $index . ')">' . $faqItem['question'] . '</h3>';
    echo '<div class="answer" id="answer-' . $index . '">' . $faqItem['answer'] . '</div>';
    echo '</div>';
}
?>