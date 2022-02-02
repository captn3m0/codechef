---
{"category_name":"easy","problem_code":"SHOPTRIP","problem_name":"Bear and Shop Trip","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":"mnbvmar","date_added":"20-04-2017","tags":{"0":"cook81","1":"dp","2":"easy","3":"errichto"},"editorial_url":"https://discuss.codechef.com/problems/SHOPTRIP","time":{"view_start_date":1492972200,"submit_start_date":1492972200,"visible_start_date":1492972200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK81/mandarin/SHOPTRIP.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK81/russian/SHOPTRIP.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK81/vietnamese/SHOPTRIP.pdf">Vietnamese</a> as well.</h3>


<p>Bear Limak is an assistant in the kitchen.
While he doesn't really know how to cook, he can run very fast and thus Chef often sends him to buy new ingredients from shops.</p>

<p>Chef needs <b>K</b> different ingredients, numbered 1 through <b>K</b>.</p>

<p>The kitchen is located at the point (0, 0).
There are <b>N</b> shops.
The i-th shop is located at the point (<b>X</b><sub>i</sub>, <b>Y</b><sub>i</sub>) and its inventory is described by the string <b>s</b><sub>i</sub> of length <b>K</b>.
The i-th character of <b>s</b><sub>i</sub> is '1' if the i-th ingredient is available in this shop, and '0' otherwise.</p>

<p>All <b>N</b>+1 points are distinct (the kitchen and the <b>N</b> shops).</p>

<p>Limak must start from the kitchen, visit some shops and buy all necessary ingredients (each of <b>K</b> ingredients should be available in at least one visited shop), and go back to the kitchen.
What is the minimum total distance Limak will cover?
Print -1 if it's impossible to get all the ingredients.</p>


<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The first line of each test case contains two integers <b>N</b> and <b>K</b> denoting the number of shops and the number of ingredients.</p>

<p>The i-th of the next <b>N</b> lines contains two integers <b>x</b><sub>i</sub> and <b>y</b><sub>i</sub> denoting coordinates of the i-th shop.
No two shops are at the same point, and no shop is at the point (0, 0).</p>

<p>The i-th of the next <b>N</b> lines contains a string <b>s</b><sub>i</sub> of length <b>K</b>, consisting of characters '1' and '0'.
The j-th character is '1' if and only if the j-th ingredient is available in this shop.</p>


<h3>Output</h3>

<p>For each test case, output a single line containing the answer: a number -1 if Limak can't get all <b>K</b> ingredients, or one real value otherwise — the minimum total distance.
The relative or absolute error shouldn't exceed 10<sup>-6</sup>.</p>



<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 36</li>
<li>1 ≤ <b>K</b> ≤ 12</li>
<li>-1000 ≤ <b>x</b><sub>i</sub>, <b>y</b><sub>i</sub> ≤ 1000</li>
</ul>



<h3>Example</h3>

<pre><b>Input:</b>
5
3 6
100 100
-50 100
0 -100
111110
110011
001111
3 6
100 100
-50 100
0 -100
111110
110011
111111
3 6
100 100
-50 100
0 -210
111110
110011
111111
3 6
100 100
-50 100
0 -210
111010
110011
111011
10 10
763 77
512 859
494 362
-986 -885
-866 890
128 553
-879 981
449 310
-406 10
-955 -475
0000001000
1000000000
0000000100
0001000000
0000100000
0010000000
0000010000
0000000001
0100000000
0000000010

<b>Output:</b>
403.2247551123
200.0000000000
403.2247551123
-1
6652.7837723893
</pre>


<h3>Explanation</h3>

<p><b>Test case 1.</b> There are 3 shops, located at points (100, 100), (-50, 100) and (0, -100). The first shop is described by a string "111110", which means that ingredients 1 through 5 are available in this shop, but ingredient 6 isn't. The other two shops are described by strings "110011" and "001111" respectively. Any two shops are enough to get all 6 ingredients (because, for every two shops it's true that each of 6 ingredients is available in at least one of those two shops).</p>

<p>To minimize the total distance, Limak should visit the first and the second shop (in any order). For example, his journey can look as follows:</p>

<ul>
<li>Go from the starting point (0, 0) to the first shop (100, 100). The distance is sqrt(100<sup>2</sup> + 100<sup>2</sup>) = 141.4213562373095.</li>
<li>Go from (100, 100) to (-50, 100). The distance is 150.</li>
<li>Go from (-50, 100) back to the kitchen at (0, 0). The distance is sqrt(50<sup>2</sup> + 100<sup>2</sup>) = 111.80339887498948</li>
</ul>

<p>The total distance is 141.4213562373095 + 150 + 111.80339887498948 = 403.224755112299.</p>

<p><b>Test case 2.</b> This time the third shop has all the ingredients. It's optimal to visit only this shop and go back to the kitchen.</p>

<p><b>Test case 4.</b> Limak can't get all ingredients, even if he visits all the shops. The answer is -1.</p>