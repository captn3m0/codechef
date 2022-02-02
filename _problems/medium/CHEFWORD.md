---
{"category_name":"medium","problem_code":"CHEFWORD","problem_name":"Chef and Words","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":null,"date_added":"26-03-2014","tags":{"0":"berezin","1":"dynamic","2":"matrix","3":"medium","4":"nov14"},"editorial_url":"http://discuss.codechef.com/problems/CHEFWORD","time":{"view_start_date":1416216600,"submit_start_date":1416216600,"visible_start_date":1416216600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/CHEFWORD.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/CHEFWORD.pdf">Russian</a>.</h3>
<p> </p>
<p>Nobody knows but Chef can play with words! He has a word. He claps and each letter of the word transform to another letter(independently)! All letters are only in range <b>a-z</b>. For each pair of symbols from <b>'a'</b> to <b>'z'</b> there is a probability that first symbol will transform into second one after clapping. Note that the symbol can also transform into the same symbol. </p>
<p>Also Chef has a list of words. He asks you what is the probability that after <b>exactly</b> <b>K</b> claps Chef's word will equal one of the words from list? </p>
<p> </p>
<h3>Input</h3>
<ul>
<li>First line contains integer <b>T</b> denoting the number of test cases. </li>
<li>The first line of each test case contains two integers <b>N</b> and <b>K</b> denoting the number of words in list and number of clappings. </li>
<li>The second line contains string <b>S</b> denoting the Chef's word. </li>
<li>Each of the next <b>26</b> lines contains <b>26</b> space separated doubles. The <b>j<sub>th</sub></b> double in the <b>i<sub>th</sub></b> line denotes the probability that the <b>i<sub>th</sub></b> small letter of English alphabet will transform to the <b>j<sub>th</sub></b> one afterclapping. Letter <b>a</b> has number <b>1</b>. </li>
<li>Each of the next <b>N</b> lines contains string <b>s<sub>i</sub></b> - next word from the list. </li>
</ul>
<p> </p>
<h3>Output</h3>
<ul>
<li>For each test case in a single line print the probability that after exactly <b>K</b> clappings the Chef's word will be equal to one from the list. Answer will be considered as correct if absolute difference between the answer and correct answer is less or equal <b>10^(-6)</b>
</li></ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li>The total length of all words in one test file is less or equal <b>10^6</b>. </li>
<li><b>1</b> ≤ <b>|S|, |s<sub>i</sub>|</b> ≤ <b>3</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10^9</b></li>
<li><b>0</b> ≤ <b>a<sub>i</sub><sub>j</sub></b> ≤ <b>1</b></li>
<li>Sum of <b>a<sub>i, 1</sub></b> + <b>a<sub>i, 2</sub></b> + ... + <b>a<sub>i, 26</sub></b> = 1</li>
<li>All words contains only letters from <b>a</b> to <b>z</b>. </li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask <b>1</b>: <b>T</b> ≤ <b>50</b>; <b>N</b> ≤ <b>100</b>, <b>K</b> ≤ <b>3</b>. Points: 15 </li>
<li>Subtask <b>2</b>: <b>T</b> ≤ <b>50</b>; The sum of <b>N</b> within one test file ≤ <b>10^5</b>; <b>K</b> ≤ <b>10^5</b>.  Points: <b>25</b></li>
<li>Subtask <b>3</b>: <b>T</b> ≤ 50; <b>N</b> ≤ 10^5; <b>K</b> ≤ <b>10^9</b>. Points: <b>60</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
4 1
abc
0.25 0.25 0.25 0.25 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
0.50 0.50 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
0.1 0.9 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
daa
bbb
ccc
zz
<b>Output:</b>
0.125000000000000
</pre><p> </p>
<h3>Explanation</h3>
<pre>
daa (a->d) * (b->a) * (c->a) | 0.25*0.5*0.1 = 0,0125
bbb (a->b) * (b->b) * (c->b) | 0.25*0.5*0.9 = 0,1125
ccc (a->c) * (b->c) * (c->c) | 0
zz (a->z) * (b->z) * (c can't transform to empty space as it is not allowed).
</pre>