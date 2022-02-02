---
{"category_name":"medium","problem_code":"SHAIKHGN","problem_name":"Funny gnomes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"na2a","problem_tester":"xcwgf666","date_added":"23-05-2016","tags":{"0":"aug16","1":"bitset","2":"medium","3":"na2a"},"editorial_url":"http://discuss.codechef.com/problems/SHAIKHGN","time":{"view_start_date":1471253400,"submit_start_date":1471253400,"visible_start_date":1471253400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/mandarin/SHAIKHGN.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/russian/SHAIKHGN.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/vietnamese/SHAIKHGN.pdf">Vietnamese</a> as well.</h3>

<p>Kekocity's population consist of <b>N</b> gnomes numbered with unique ids from <b>1</b> to <b>N</b>. As they are very joyful gnomes, they usually send jokes to their friends right after they get any (even if they knew it before) via their social network named as Mybeard. Mybeard became popular in the city because of message auto-deletion. It takes exactly one minute to read and resend joke to mates.</p>

<p>
Mayor of Kekocity, Mr. Shaikhinidin, is interested in understanding how the jokes are spread. He gives you database of Mybeard social network, and wants you to answer some queries on it.</p>

<p>
You will be given a list of friends for every gnome and <b>M</b> queries of the following type: Who will receive a message with joke after exactly <b>K</b> minutes, if the creator of joke was gnome with id <b>x</b>?</p>
</p>

<h3>Input</h3>
<p>The first line contains a single integer <b>N</b> denoting the number of gnomes.</p>
<p>The next <b>N</b> lines contain the the matrix <b>g[N][N]</b>. Each of the <b>i</b>-th line, will contain <b>N</b> space separated integers - <b>j</b>-th of those will denote <b>g[i][j]</b>. If gnome <b>j</b> is friend of gnome <b>i</b>, then <b>g[i][j]</b> is 1. Otherwise it will be zero. Plese note that the friendship relationship is not bidirectional, i.e. it might happen that g[i][j] may not be equal to g[j][i]. Also one can be friend of itself also, i.e. g[i][i] may be equal to 1.</p>
<p>The next line contains a single integer <b>M</b> denoting the number of queries. The next <b>M</b> lines contain two integers <b>k</b> and <b>x</b> described above.</p>

<h3>Output</h3>
<p>For each query, output two lines.</p>
<p>In the first line, output how many gnomes will know the joke after <b>k</b> minutes.</p>
<p>In the second line, print these ids (numbering) of these gnomes in increasing order. If no one will know the joke after <b>K</b> minutes, then print -1 in this line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>500</b></li>
<li><b>0</b> ≤ <b>k</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>x</b> ≤ <b>N</b></li>
<li><b>0</b> ≤ <b>g[i][j]</b> ≤ <b>1</b></li>
</ul>

<h3> Subtasks </h3>
<b> Subtask #1 : (10 points) </b>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>50</b></li>
<li><b>0</b> ≤ <b>k</b> ≤ <b>50</b></li>
</ul> </br>

<b> Subtask #2 : (15 points) </b>
<ul>
<li>Original constraints</li>
<li>Every gnome has exactly one friend (for every i there is exactly one j such that g[i][j] = 1. Note that j can be equal to i) </li>
</ul> </br>

<b> Subtask #3 : (30 points) </b>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>75</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>75</b></li>
<li><b>0</b> ≤ <b>k</b> ≤ <b>10<sup>9</sup></b></li>
</ul> </br>

<b> Subtask #4 : (45 points) </b>
<ul>
<li>Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>5
0 1 0 0 0
0 0 1 1 0
1 0 0 0 0
0 0 0 1 0
0 0 0 0 0
4
3 1
10000 1
0 5
1 5</tt>

<b>Output:</b>
<tt>2
1 4
2
2 4
1
5
0
-1</tt>
</pre>