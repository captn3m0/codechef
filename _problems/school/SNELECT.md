---
{"category_name":"school","problem_code":"SNELECT","problem_name":"Snakes, Mongooses and the Ultimate Election","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"kingofnumbers","date_added":"30-05-2017","tags":{"0":"ad","1":"admin2","2":"easy","3":"greedy","4":"snckpb17"},"editorial_url":"https://discuss.codechef.com/problems/SNELECT","time":{"view_start_date":1496331000,"submit_start_date":1496331000,"visible_start_date":1496331000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/mandarin/SNELECT.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/russian/SNELECT.pdf">Russian</a>and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/vietnamese/SNELECT.pdf">Vietnamese</a> as well.</h3>

<p>In Snakeland, there are some snakes and mongooses. They are lined up in a row. The information about how exactly they are lined up it is provided to you by a string of length <b>n</b>. If the i-th character of this string is 's', then it means that there is a snake at the i-th position, whereas the character 'm' denotes a mongoose.</p>

<p>You might have heard about the age-old rivalry between hares and tortoises, but in Snakeland, the rivalry between snakes and mongooses is much more famous. The snakes and the mongooses want to hold a final poll in which the ultimate winner of this age-old battle will be decided. If the snakes get more votes than the mongooses, they will be the ultimate winners. Similarly, if the mongooses get more votes than snakes, they will be the ultimate winners. Obviously, each animal is loyal to their species, i.e. each snake will vote for the snakes to be the ultimate champions and each mongoose for the mongooses.
</p>

<p>
Tomorrow's the election day. Before the elections, the mongooses decided to cheat. They planned that each mongoose will eat at most one of its neighbor snakes. Two animals are said to be neighbors of each other if they are consecutive to each other in the row. After this, the elections will be held. The mongooses planned in such a way that the number of snakes eaten is maximized. Can you find out who will win the final poll? Output "snakes", "mongooses" or "tie" correspondingly.
</p>

<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follow.</p>
<p>The only line of each test case contains a string consisting of characters 's' and 'm'. </p>

<h3>Output</h3>
<p>For each test case output a single line containing "snakes", "mongooses" or "tie" correspondingly (without quotes).</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>|s|</b> ≤ 100</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
4
sm
ssm
sms
ssmmmssss

<b>Output</b>
mongooses
tie
tie
snakes
</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>. The mongoose will eat the snake. Only the mongoose will be left. So, on the election day, there is one mongoose and zero snakes. So mongooses will win.</p>

<p><b>Example 2</b>. The mongoose will eat the snake at position 2 (1-based indexing). One mongoose and one snake will be left. Hence, there will be a tie.</p>

<p><b>Example 3</b>. The mongoose can eat either the snake to its left or to the right. But, it can eat only one of them. Afterwards, there will be a single snake and mongoose. So, it will result in a tie. </p>

<p><b>Example 4</b>. The mongooses can eat at max two snakes. For example, s*mmm*sss, where * denotes the snakes that were eaten by mongooses. After this, we have four snakes and three mongooses. So, the snakes win.</p>