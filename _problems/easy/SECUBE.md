---
{"category_name":"easy","problem_code":"SECUBE","problem_name":"Sebi and the cube","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"iscsi ","problem_tester":"kevinsogo","date_added":"18-07-2016","tags":{"0":"cook76","1":"easy","2":"iscsi","3":"modular","4":"precomputation"},"editorial_url":"http://discuss.codechef.com/problems/SECUBE","time":{"view_start_date":1479666600,"submit_start_date":1479666600,"visible_start_date":1479666600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK76/mandarin/SECUBE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK76/russian/SECUBE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK76/vietnamese/SECUBE.pdf">Vietnamese</a> as well.</h3>

<p>Sebi likes solving Rubik's cube a lot. He spends a lot of time in getting expertize in solving not only the 3 * 3 * 3 cube, but also the cubes of higher dimensions like 4 * 4 * 4, 5 * 5 * 5 and so on.</p>

<p>Chefland has a very famous toy shop which sells Rubik's cubes. This shop has interesting rules. Each day it sells cubes of a fixed dimension. Sebi has to buy new cubes daily primarily due to two reasons, one he handles the cube very roughly and the other that he solves the cube so many times during the day.</p>

<p>Today the shop is selling <b>K * K * K</b> size Rubik's cubes. In the morning, Sebi bought a cube from the shop. He had just started playing with it, suddenly his cute little sisters asked him to give them <b>C</b> units of the cube. Sebi's did not want to disappoint his sisters, so he immediately disassembled the cube into <b>K * K * K</b> units and gave <b>C</b> of those to his sisters.</p>

<p>Now Sebi wants to solve the Rubik's cube again, so he thought of going to market and buy some cubes so that he can create a Rubik's cube from those. The newly created cube can be of any dimension. For achieving that, he can disassemble and reassemble the cubes in the way he wants, but he does not want to waste any units of the cubes.</p>

<p>Can you please tell whether Sebi will be able to build such a Rubik's cube or not?</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of the test cases.</p>
<p>Each test case contains two space separated integers <b>K, C</b> as defined in the statement.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing "YES" or "NO" (without quotes) corresponding to the situation.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>C</b> ≤ <b>K<sup>3</sup></b></li>
<li><b>2</b> ≤ <b>K </b> ≤ <b>100</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
2 5
2 2

<b>Output:</b>
YES
NO
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> In this case Sebi bought a Rubik's of size 2 * 2 * 2. His sisters wanted 5 units of cube. He disassembled the cube into 8 units immediately and gave 5 of them to his sisters. Now he is left with 3 units. He buys 3 cubes at the shop. Now, after disassembling, he has 3 + 3 * 8 = 27 cubes. By making use of these 27 cubes, he can make a Rubik's cube of size 3 * 3 * 3.</p>