---
{"category_name":"medium","problem_code":"SBSTCNT","problem_name":"Weird Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"utkarsh_lath","problem_tester":null,"date_added":"8-07-2016","tags":{"0":"utkarsh_lath"},"time":{"view_start_date":1468063200,"submit_start_date":1468063200,"visible_start_date":1468063200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/mandarin/SBSTCNT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/russian/SBSTCNT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/vietnamese/SBSTCNT.pdf">Vietnamese</a> as well.</h3>
<p>
You are given a list of <b>M</b> positive numbers, <b>A<sub>0</sub></b>, <b>A<sub>1</sub></b>, ..., <b>A<sub>M-1</sub></b>. You have to answer <b>Q</b> queries. Each query has four parameters, <b>l, r, n, k</b>. Given a query with parameters <b>l, r, n, k</b> here is how to compute the answer:</p>
<ul>
<li>Let <b>(B<sub>1</sub>, B<sub>2</sub> ..., B<sub>d</sub>) = (A<sub>l</sub>, A<sub>l+1</sub>, ... ,A<sub>r</sub>)</b>, where <b>d = r-l+1</b>.
</li><li>Let <b>S</b> = set of all points <b>(x<sub>1</sub>, x<sub>2</sub>, ..., x<sub>d</sub>)</b> in <b>d</b>-dimensional space such that <b>0 &lt; x<sub>i</sub> ≤ B<sub>i</sub></b>.
</li><li>For <b>x, y ∈ S</b>, define <b>dist(x, y) = min<sub>1 ≤ i ≤ d</sub> | x<sub>i</sub> - y<sub>i</sub> |</b>
</li><li> The answer is number of subsets of <b>S</b> of size exactly <b>n</b> such that distance (denoted by above defined <b>dist</b> function) between any two points is at least <b>k</b>.
</li></ul>

<h3>Input</h3>
<p>The first line of input contains two integers, <b>M</b> and <b>Q</b>. The second line contains <b>M</b> space-separated integers <b>A<sub>0</sub></b>, <b>A<sub>1</sub></b>, ..., <b>A<sub>M-1</sub></b> denoting the array <b>A</b>. The next <b>Q</b> lines contain one query each. Each query consists of a single line having the four space separated integers <b>l, r, n, k</b> in this order.
</p>
<h3>Output</h3>
<p>For each query, output a single line containing the answer modulo <b>1000000007 (10<sup>9</sup> + 7)</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>M</b> ≤ <b>5 × 10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>3 × 10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
<li><b>∑ <sub>0 ≤ i &lt; M</sub> A<sub>i</sub></b> ≤ <b>3 × 10<sup>6</sup></b></li>
<li>For each query, <b>0</b> ≤ <b>l</b> ≤ <b>r</b> &lt; <b>M</b></li>
<li><b>1</b> ≤ <b>k</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>n</b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5 2
4 5 4 6 2
0 3 1 1
2 2 2 3

<b>Output:</b>
480
1
</pre><h3>Explanation</h3>
<p>For the first query, the answer is 4 * 5 * 4 * 6, because we just have to choose one coordinate from each dimension.<br />
For the second query, the array <b>B = [4]</b> and you have to pick two positive integers less than or equal to 4 such that the distance between them is 3 or more. There is only way to do this: pick 1 and 4.</p>
