# Car

ტექნიკური დავალება . სისტემა უნდა იყოს ერთენოვოანი . სისტემის შესაქმნელად გამოყენებული უნდა იყოს შემდეგი ტექნოლოგიები: HTML5, CSS, Booststrap, Laravel . სისტემა წარმოდგენილი უნდა იყოს კომპიუტერის მთლ ეკრანზე, ეკრანის ზომის მიუხედავად, მათ შორის სმარტფონებსა და პლანშეტებისთვის.

ვებ-გვერდის მომხმარებლის ტიპები . 
მომხმარებელი: მომხმარებელს აქვს შესაძლებლობა დაათვალიეროს საიტის მთლიანი გვერდი. 
ვებ-გვერდის ადმინისტრატორს: აქვს უფლება დაამატოს, შეცვალოს, წაშალოს: სლაიდერი, სერვისები, Social Links.

ვებ-გვერდის ფუნქციონალი

Home | მთავარი 

 მთავარი გვერდი ყოველთვის მორგებულია ეკრანის ზომას,
 შესაძლებელია ფოტოების დათვალიერება (სლაიდერი)
 სლაიდერი (ფოტო) მორგებულია ეკრანის ზომას
 ფოტოს ახლავს თარიღი და დასათაურება

Services | სერვისები  

სერვისებს აქვს დასათაურება 
სერვისების გვერდზე გამოტანილია 3 ძირითადი მომსახურება

Contact | კონტაქტი 
 გამოყენებულია გუგლის რუკა (უმჯობეის google api-თ შემოტანა) 
 აქვს საკონტაქტო ფორმა,
  თუ მომხმარებელმა ცარიელი დატოვა ველი, შესაბამისი შეტყობინებას ხედავს 
  მომხმარებელი ხედავს შეტყობინება გაგზავნის შემთხვევაში (error and success messages)

Navigation | 
ნავიგაცია 
ნავიგაციის ღილაკი 
დინამიურად იცვლება (გახნსა დახურვა)
მენიუზე მიჭერისას დინამიურად ისქროლება შესაბამის განყოფილებაზე

Footer copyright ვებგვერდის შექმნელები :)

cms (content management system)

#backend cms ნაწილი უკვე დავასრულე 2 დღეში

2.1. მოდულები:

Home | მთავარი 
შესაძლებელია დამატება, რედაქტირება და წაშლა: 
• ფოტო 
• თარიღი 
• დასათაურება

Services | სერვისები 
შესაძლებელია დამატება, რედაქტირება და წაშლა •
 სერვისის ფოტო (svg ფორმატში) • 
 დასათაურება

Social Links | 
სოციალური ქსელებისათის ბმულების დამატება 
შესაძლებელია მხოლოდ რედაქტირება: 
Facebook • Google+ • twitter

Subscribers | გამომწერები 
არ აქვს, რედაქტირების, წაშლის ან დამატების შესაძლებლობა ჩანს:
 • მომხმარებლის სახელი 
 • ელექტრონული ფოსტა 
 • შევსების თარიღი (Feature)

2.2. ფუნქციონალი: 
Login Page | ავტორიზაციის გვერდი არსებული (ბაზაში წინასწარ შექმნილი) ელ.ფოსტით და პაროლით შესაძლებელია ავტორიზაციის გავლა. ვებგევრდის კონტეტნტის ადმინისტრირებისათვის.

Contact form | კონტაქტის ფორმა 
 საკონტაქტო ფორმის ვალიდაცია 
 მომხმარებელს არ აქვს უფლება დატოვოს ცარიელი/შეუვსებელი ტექსტური ველები და სქესის მოსანიშნი სექცია, თუკი ცარიელს დატოვებს უნდა გამოუტანოს შესაბამისი შეტყობინება (error message) თუკი ყველა სავალდებულო ველი შეავსო, და გადააგზავნა, წარმატების შემტხვევაში უნდა გამოიტანოს შესაბამისი მესიჯი (success message) შეტყობინება იგზავნება Email-ზე

Features: 

მოდული: Dashboard, როდესაც ადმინისტრატორის პანელში ლოგინდები ჩანს ეს მოდული, სადაც გამოტანილია: რამდენი სერვისია დამატებული რამდენი subscriber/სიახლეების გამომწერი ყავს ვებგვერდს 
ვალიდაცია, ველები, რომლის ცარელი დატოვებაც არ შეიძლება სერვისები - დასათაურება სლიდერი - დასათაურება