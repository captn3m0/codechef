---
{"category_name":"easy","problem_code":"SUPVIL","problem_name":"Superheroes and villains","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pkacprzak","problem_tester":null,"date_added":"27-12-2016","tags":{"0":"basic","1":"cakewalk","2":"ltime43","3":"pkacprzak"},"time":{"view_start_date":1483203600,"submit_start_date":1483203600,"visible_start_date":1483203600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME43/mandarin/SUPVIL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME43/russian/SUPVIL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME43/vietnamese/SUPVIL.pdf">Vietnamese</a> as well.</h3>

<p>In a world of superheroes each person is either a superhero or a villain. It is well known that every superhero has a name ending with either “man” or “woman”, for example “chefman”, “prettywoman” are Superheroes. All other persons are villains, for example “hacker” and “unclejohn". 
</p>


<p>Currently a big fight between the superheroes and the villains is going to happen. Initially there is only one superhero fighting one villain. Then total of <b>N</b> persons joined the fight one after another. If at point of time, there are two more superheroes than villains in the fight, superheroes will win the fight immediately, as they can overwhelm villains with their powers. On the other hand, if there are 3 more villains than superheroes at any time, they will win, because they use dirty tricks to defeat the superheroes. If over all all the fights, none of these cases happen, then the fight is declared to be a draw. For a given list of people joining the fight in the given order, decide which groups wins the fight or whether the fight is ended with a draw. 
</p>

<h3>Input</h3>
<p>In the first line there is a single integer <b>T</b> denoting the number of test cases to handle. After that the description of <b>T</b> test cases follow.</p>
<p>Description of each test cases starts with a line containing a single integer <b>N</b> denoting the number of people joining the fight.</p>
<p>The <b>i</b>-th of the following <b>N</b> lines contains the name of person joining the fight at time <b>i</b>.</p>

<h3>Output</h3>
<p>
For each test cases, output either "superheroes" if superheroes win the fight, "villains" if villains win or a "draw" if the fight ends with a draw. All of these strings should be outputted without quotes.
</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li> 
<li>Every person's name consists only of English lowercase letters (i.e. from 'a' to 'z') and it is no longer than 15 characters.</li>
<li>No two persons have the same name.</li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1: (30 points)</b>
<ul>
<li><b>1 ≤ N ≤ 500</b></li>
</ul>
</p>

<p>
<b>Subtask #2: (70 points)</b>
<ul>
<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
3  
2   
kittywoman  
wingman  
6  
hacker  
beautywoman  
blackjack  
noname  
watersnake  
strongman  
4  
famousman  
redsnake  
tallwoman  
tinythief  

<b>Output:</b>
superheroes
villains
draw
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> As you know that initially a superhero is fighting with a villain. After that, superhero "kittywoman" joins the fight. At this point, there are two superheros and one villain. After that "wingman" joins the fight too. As this point of time, there are three superheros and one villain, so the number of superheros are two more than number of villains, so superheros will win the fight. </p>
<p><b>Example case 2.</b> Other than first two peoople, six more people join the fight. The moment when the fight is decided is after <b>watersnake</b> joins the fight, because there are two superheroes fighting five villains, so villains will win.</p>
<p><b>Example case 3.</b> Other than initial two people, four more people join the fight, and there is no moment at which the fight can be decided, so it ends with a draw.</p>