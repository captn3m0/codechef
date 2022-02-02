---
{"category_name":"easy","problem_code":"BANROB","problem_name":"Bank robbery","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kaizer","problem_tester":"kevinsogo","date_added":"10-07-2015","tags":{"0":"binary","1":"easy","2":"kaizer","3":"math","4":"sept15"},"editorial_url":"http://discuss.codechef.com/problems/BANROB","time":{"view_start_date":1442223000,"submit_start_date":1442223000,"visible_start_date":1442223000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/mandarin/BANROB.pdf">Mandarin</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/russian/BANROB.pdf">Russian</a>. Translations in Vietnamese to be uploaded soon.</h3>
<p>Two cheeky thieves (Chef being one of them, the more talented one of course) have came across each other in the underground vault of the State Bank of Churuland. They are shocked! Indeed, neither expect to meet a colleague in such a place with the same intentions to carry away all the money collected during Churufest 2015.
</p>
<p>
They have carefully counted a total of exactly 1 billion (<b>10<sup>9</sup></b>) dollars in the bank vault. Now they must decide how to divide the booty. But there is one problem: the thieves have only <b>M</b> minutes to leave the bank before the police arrives. Also, the more time they spend in the vault, the less amount could carry away from the bank. Formally speaking, they can get away with all of the billion dollars right now, but after <b>t</b> minutes they can carry away only <b> 1 billion * p<sup>t</sup></b> dollars, where <b>p</b> is some non-negative constant less than or equal to unity, and at <b>t = M</b>, they get arrested and lose all the money.<br />
They will not leave the vault until a decision on how to divide the money has been made.</p>
<p>
The money division process proceeds in the following way: at the beginning of each minute starting from the 1<sup>st</sup> (that is, <b>t = 0</b>), one of them proposes his own way to divide the booty. If his colleague agrees, they leave the bank with pockets filled with the proposed amounts of dollars. If not, the other one proposes his way at the next minute etc. To escape arrest, they can only propose plans till the beginning of the <b>M</b><sup>th</sup> minute (i.e., till <b>t = M-1</b>).<br />
Each thief wants to maximize his earnings, but if there are two plans with the same amounts for him, he would choose the one which leads to a larger total amount of stolen dollars.
</p>
<p>Chef is about to start this procedure, and he is the first to propose a plan. You are wondering what will be the final division of money, if each thief chooses the optimal way for himself and money is considering real.</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of input for each test case contains an integer <b>M</b> denoting the number of minutes until arrest and a double denoting the constant <b>p</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing two space-separated doubles denoting the amount of dollars each thief will get in the optimal division. First number: dollars amassed by Chef, and second: by his colleague. The answer will be considered correct if its absolute error doesn't exceed 10<sup>-2</sup>.</p>
<h3>Constraints and subtasks</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>p</b> ≤ <b> 1 </b> </li>
</ul>

<p><b>Subtask 1</b> (15 points) :<br />
<b>1</b> ≤ <b>M</b> ≤ <b>3</b><br />
<br />
<b>Subtask 2</b> (55 points) :<br />
<b>1</b> ≤ <b>M</b> ≤ <b> 10<sup>3</sup></b><br />
<br />
<b>Subtask 3</b> (30 points) :<br />
<b>1</b> ≤ <b>M</b> ≤ <b>10<sup>9</sup></b></p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 0.5
2 0.5
<b>Output:</b>
1000000000.0 0.0
500000000.0 500000000.0
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> In the second case, if decision isn't made at <b>t = 0</b>, total amount of money decreases to 5*10<sup>8</sup> at <b>t = 1</b> which leads to a situation worse than the given solution.</p>
