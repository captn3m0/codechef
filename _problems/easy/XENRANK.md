---
{"category_name":"easy","problem_code":"XENRANK","problem_name":"Xenny and Coin Rankings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"wittyceaser","problem_tester":null,"date_added":"14-05-2017","tags":{"0":"wittyceaser"},"time":{"view_start_date":1497259800,"submit_start_date":1497259800,"visible_start_date":1497259800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/mandarin/XENRANK.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/russian/XENRANK.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/vietnamese/XENRANK.pdf">Vietnamese</a> as well.</h3>

<p>Xenny reverse-engineered all the binaries released by the International Security Agency (ISA)
during summer vacation just to pass time. As a reward, the ISA gave him infinite ByteCoins.</p>

<p>Out of sheer boredom and a sense of purposelessness in life, Xenny decided to arrange the Coins on a 2-Dimensional Euclidean Plane.
The boredom was so strong that he arranged these coins in a specific pattern, as opposed to the usual, monotonous way of storing coins in a Piggy Bank.</p>

<p>On each integer co-ordinate (x, y) where x ≥ 0 and y ≥ 0, a single coin was placed. And each coin was assigned a rank. The following pattern was followed in the arrangement:</p>

<p>Let's denote the co-ordinates of the k<sup>th</sup> coin by (x<sub>k</sub>, y<sub>k</sub>) and its rank by R<sub>k</sub>.</p>

<img src="https://docs.google.com/drawings/d/11xOeiWc_yhJz9WxoLddlTWO872Hel8of6atHHhWD2-Q/pub?w=475&h=422" width="475" height="422"></img>

<p>
For any 2 coins i, j:
</p>

<p>
if <b>(x<sub>i</sub> + y<sub>i</sub>) < (x<sub>j</sub> + y<sub>j</sub>) or ( (x<sub>i</sub> + y<sub>i</sub>) == (x<sub>j</sub> + y<sub>j</sub>) and x<sub>i</sub> < x<sub>j</sub>)</b>
</p>

<p>
then <b>R<sub>i</sub> < R<sub>j</sub></b>. We sort all the coins by this comparison.
</p>

<p>
The index of the coin (C) in this sorted list of coins (1-indexed) is its rank.
</p>

<p>Each query is as follows: Given <b>(U, V)</b>. Among the coins that are lying on or inside the rectangle with
its diagonal end-points being <b>(0, 0)</b> and <b>(U, V)</b>,
which is the coin that has the maximum rank?</p>

<h3>Input</h3>
<p>
The first line contains an integer, <b>T</b> - the number of testcases.</p>
<p>
Each testcase contains 2 space-separated integers: <b>U</b>, <b>V</b>.
</p>

<h3>Output</h3>
For each testcase, print the rank of the maximum ranked coin, on a new line.

<h3>Constraints</h3>
<p>
  Subtask 1: (40 points)
  <ul>
    <li><b>1 ≤ T ≤ 100</b></li>
    <li><b>1 ≤ U, V ≤ 100</b></li>
  </ul>
</p>
<p>
  Subtask 2: (60 points)
  <ul>
    <li><b>1 ≤ T ≤ 100</b></li>
    <li><b>1 ≤ U, V ≤ 10<sup>9</sup></b></li>
  </ul>
</p>

<h3>Sample Testcase</h3>

<pre>
<b>Input</b>:
1
1 2

<b>Output</b>:
8</pre>
