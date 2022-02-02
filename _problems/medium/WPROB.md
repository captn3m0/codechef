---
{"category_name":"medium","problem_code":"WPROB","problem_name":"The Warehouse","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"furko","date_added":"24-01-2015","tags":{"0":"ltime21","1":"medium","2":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/WPROB","time":{"view_start_date":1424594160,"submit_start_date":1424594160,"visible_start_date":1424593800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME21/mandarin/WPROB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME21/russian/WPROB.pdf">Russian</a>.</h3>
<p>Olya works as a warehouse keeper for a T-Shirt factory. Now the factory is facing hard times, so currently they produce only the T-shirts of three kinds: red, green and blue T-Shirts. All the T-shirts are stored in the containers, each of the containers contain the T-Shirts of a single colour.</p>
<p>Now there are <b>N</b> containers at the warehouse, lined up in a line. Let's enumerate the containers by the positive integers from <b>1</b> to <b>N</b>, starting from the leftmost and ending at the rightmost one. Their order is described with a string <b>S</b>. Each symbol of this string is either "r", "g" or "b" and denotes the colour of the respective T-shirts, stored in the container.</p>
<p>Olya likes orderliness. She is not satisfied with the fact that different kinds of containers are messed up. So she wants to rearrange the containers in such a way that the number of pairs of adjacent containers that contain the T-shirts of different colors is as minimal as possible.</p>
<p>For doing that, she has a special crane. The crane is capable of doing the following things:</p>
<ul>
<li>Take a container with the number <b>X</b> and put it in front of all the containers. This operation takes <b>(X-1)</b> seconds. Note that we are considering the 1-dimensional model of the warehouse, so "in front of all the containers" means to the left of all the containers. The warehouse is so large, so you shouldn't worry about its' size and this operation is always performable.</li>
<li>Take a container with the number <b>X</b> and take some container to the left of it (say, the container number <b>Y</b>). Remove the container number <b>X</b> from its' position and insert it right after the container with the number <b>Y</b>. This operation will take <b>X-Y-1</b> seconds.</li>
<li>Take a container with the number <b>X</b> and take some container to the right of it (say, the container number <b>Y</b>). Remove the container number <b>X</b> from its' position and insert it right after the container with the number <b>Y</b>. This operation will take <b>Y-X</b> seconds.</li>
</ul>
<p>Note that after the operation, we will re-enumerate the containers from left to right by the positive integers from <b>1</b> to <b>N</b>.
 </p>
<p>Though Olya is keen on orderliness, she doesn't way to stay at the warehouse for long on Sunday. So she asks you to help her and to calculate the minimal possible number of seconds that is necessary to rearrange the containers in the desired way.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first (and only) line of each test case contains a string <b>S</b>, consisting of <b>N</b> symbols denoting the color string corresponding to the containers.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the problem's question for the corresponding test case.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li>The string <b>S</b> consists only of the lower-case Latin letters from the set {r, g, b}.</li>
<li>(Subtask 1): <b>1</b> ≤ <b>N = |S|</b> ≤ <b>7</b> - 33 points.</li>
<li>(Subtask 2): <b>1</b> ≤ <b>N = |S|</b> ≤ <b>1000</b> - 33 points.</li>
<li>(Subtask 3): <b>1</b> ≤ <b>N = |S|</b> ≤ <b>10<sup>5</sup></b> - 34 points.</li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
4
rgr
rrr
rgb
rgbr
<b>Output:</b>
1
0
0
2
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b>We can move the second container to the beginning of the line. This will take one second.</p>
<p><b>Example case 2.</b>Containers are already in desired way.</p>
<p><b>Example case 3.</b>Here also, containers are already in desired way.</p>
<p><b>Example case 4.</b>You can put first r to the just right of b. It will take 2 seconds to do so.</p>
