---
{"category_name":"easy","problem_code":"MTRXMOD","problem_name":"Matrix and Chef","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"melnik","problem_tester":"kingofnumbers","date_added":"17-08-2017","tags":{"0":"cook85","1":"math","2":"melnik","3":"simple"},"editorial_url":"https://discuss.codechef.com/problems/MTRXMOD","time":{"view_start_date":1503253800,"submit_start_date":1503253800,"visible_start_date":1503253800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK85/mandarin/MTRXMOD.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK85/russian/MTRXMOD.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK85/vietnamese/MTRXMOD.pdf">vietnamese</a> as well.</h3>

<p>Chef and his friend Miron were getting bored and decided to play a game. </p>

<p> Miron thinks of a sequence of <b> N </b> integers (<b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, …., <b>A<sub>N</sub></b>) and gives Chef a matrix <b>B</b>, where <b>B<sub>i,j</sub></b> = |<b>A<sub>i</sub></b> - <b>A<sub>j</sub></b>|. He further tells Chef that <b>A<sub>1</sub></b> = 0. The game is for Chef to guess the sequence that Miron thought of. </p>

<p>But Miron is an adversarial player. Every time Chef tries to guess the sequence, he makes a change to the matrix. He makes such a change <b>Q</b> times. Each time, he replaces an entry in some row and the corresponding column with a new one leaving Chef to guess the sequence after each change. </p>

<p>Chef needs a friend to help him against such an adversarial player. Can you be that friend and help Chef find a suitable sequence <b>A</b> for the initial matrix <b>B</b> and also after each change Miron makes? </p>

<p>Note that if several answers exist, then print the lexicographically smallest answer. Further, the numbers in the sequence can be negative.</p>
<h3>Input</h3>
<p>
The first line contains two space-separated integers <b>N</b>, <b>Q</b>. Each of the <b>N</b> subsequent lines contains <b>N</b> space-separated integers, denoting the matrix <b>B</b>.
</p>
<p>
<b>Q</b> queries follow. Each query has two lines. The first line of each query contains an integer <b>p</b>, denoting the number of row and column that is changed. The second line of each query contains <b>N</b> space-separated integers <b>F<sub>1</sub></b>, <b>F<sub>2</sub></b>, <b>F<sub>3</sub></b>, ... <b>F<sub>N</sub></b>, denoting the new values to the corresponding cells of the matrix (you should make the following assignments <b>B<sub>i,p</sub></b> = <b>B<sub>p,i</sub></b> = <b>F<sub>i</sub></b> for all valid <b>i</b>). 
</p>

<h3>Output</h3>
<p>Print <b>Q + 1</b> lines which contain <b>N</b> space-separated integers, Miron's initial array and Miron's array after each query.</p>

<h3>Constraints</h3>

<ul>
<li><b>3</b> ≤ <b>N</b> ≤ <b> 1000 </b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b> 1000 </b></li>
<li><b>0</b> ≤ <b>B<sub>i,j</sub></b> ≤ <b> 5000 </b></li>
<li><b>1</b> ≤ <b>p</b> ≤ <b> n </b></li>
<li><b>0</b> ≤ <b>F<sub>i</sub></b> ≤ <b> 5000 </b></li>
<li>it's guaranteed there's always an answer</li>
</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3 2
0 1 2
1 0 1
2 1 0
1
0 4 3
2
4 0 7
<b>Output:</b>
0 -1 -2
0 -4 -3
0 -4 3
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Initially, sequence <b>{0, 1, 2}</b> is also suitable, but <b>{0, -1, -2}</b> is lexicografically smaller.</p>