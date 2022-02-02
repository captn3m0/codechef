---
{"category_name":"medium","problem_code":"CARDS777","problem_name":"Yet Another Card Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"lg5293","problem_tester":"errichto","date_added":"13-03-2017","tags":{"0":"cook80","1":"expected","2":"lg5293","3":"medium"},"editorial_url":"https://discuss.codechef.com/problems/CARDS777","time":{"view_start_date":1489949100,"submit_start_date":1489949100,"visible_start_date":1489949100,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK80/mandarin/CARDS777.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK80/russian/CARDS777.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK80/vietnamese/CARDS777.pdf">Vietnamese</a> as well.</h3>

<p>
You are playing a game with a deck of <b>r</b> red cards and <b>b</b> blue cards.
You are also given <b>p</b> red tokens and <b>r+b-p</b> blue tokens. (0 ≤ <b>p</b> ≤ <b>r+b</b>).
</p>

<p>
You will now play a game with <b>r+b</b> turns.
On the i-th turn, you choose one of your tokens, then choose a random card from the deck uniformly at random.
You earn a point if the color of the token matches the color of the card.
Otherwise, your score doesn’t change.
Afterwards, both the token and the card will get discarded.
</p>

<p>
Compute the expected value of your score, assuming you play optimally.
Note, it is allowed to adjust your strategy based on how many red or blue cards you have seen in previous turns.
</p>

<h3>Input</h3>
<p>
The first line of input will contain an integer <b>T</b>, the number of test cases.
</p>

<p>
The only line of each test case will contain three space separated integers <b>r, b, p</b>.
</p>

<h3>Output</h3>
<p>
For each test case, output a single floating point value, the expected score you will get assuming you play optimally in a new line.
Your answer will be accepted if it has absolute or relative error at most 10<sup>-6</sup>.
</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10 </li>
<li>1 ≤ <b>r, b</b> ≤ 100,000</li>
<li>0 ≤ <b>p</b> ≤ <b>r</b>+<b>b</b></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
5
3 1 2
1 6 7
2 3 4
15 14 13
100000 100000 0

<b>Output:</b>
2.0000000000
1.0000000000
2.2000000000
14.4482758621
100000.0000000000
</pre>

<h3>Explanation</h3>
<p>
For the first case, we have three red cards, one blue card, two red tokens, and two blue tokens.
An optimal strategy is to choose the red token first.
There are two cases.
Either the card we choose first is red or blue.
If it is blue, then we know for sure all remaining cards will be red, so it doesn't matter how we play the remaining tokens.
This gives us 1 point.
If it is red, then we will next play our last red token.
We can check that the expected value of our score is equal to 2, and there is no other strategy that is strictly better. 
</p>