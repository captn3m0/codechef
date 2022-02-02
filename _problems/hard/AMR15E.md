---
{"contest_code":"ACMAMR15","contest_name":"ACM-ICPC Asia-Amritapuri Site, First Round - Online Contest 2015","problem_code":"AMR15E","problem_name":"Avantika","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"6 - 20","source_sizelimit":50000,"problem_author":"suh_ash2008","problem_tester":null,"date_added":"7-10-2015","tags":{"0":"acmamr15","1":"maths","2":"medium","3":"offline","4":"segment","5":"suh_ash2008"},"editorial_url":"http://discuss.codechef.com/problems/AMR15E","time":{"view_start_date":1444563000,"submit_start_date":1444563000,"visible_start_date":1453401000,"end_date":1444574100},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Young man named Baahubali found a mask next to a giant waterfalls. He imagined that it belonged to a beautiful girl. He was so determined to see the smile on her face that he did the unthinkable - he climbed the mighty waterfalls. When he reached the top, he met Avantika - the girl behind the mask and fell in love with her. He was shocked to learn that she was a warrior, but he was even more impressed after watching her fighting skills.</p>
<p>One fine day, Baahubali made a tattoo on Avantika's hand without her knowledge, and she was eventually very impressed. She asked Shiva to make more tattoos for her, and he sure doesn't want to disappoint her.</p>
<p>Initially, Baahubali has <b>N</b> bottles of paint, where each bottle is filled with paint of some color. More specifically, bottle <b>i</b> contains paint of color <b>A<sub>i</sub></b>, and two different bottles may contain paint of the same color. Baahubali uses 2 values <b>L</b> and <b>R</b>.</p>
<p>He has a secret formula which is the following: He chooses all the unique paints from bottles in the range <b>[L, R]</b> (both inclusive). He then arranges the paints in increasing order of their color (<b>A<sub>i</sub></b>). Assume that there are <b>K</b> unique paints in the range <b>[L, R]</b>, and after arranging them in increasing order of their color value, he gets <b>B<sub>1</sub>, B<sub>2</sub>, ..., B<sub>K</sub></b>. He now mixes all of them by taking exactly <b>i</b> units of paint <b>B<sub>i</sub></b> and summing them up to get a new colored paint. More specifically, he takes <b>sum(i * B<sub>i</sub>)</b> to get a new colored paint.</p>
<p>Avantika asked him to make <b>M</b> tattoos for her. Your task is to help Baahubali find the value of the new color he gets using the above method, given the <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b> values for each of the M tattoos.</p>

<h3>Input</h3>
<p>The first line of input consists of a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follow. The first line of each test case consists of a single integer <b>N</b>, denoting the number of bottles of paint that Baahubali has. The second line of each test case consists of <b>N</b> space separated integers <b>A<sub>1</sub>, A<sub>2, ..., A<sub>N</sub></sub></b> , where <b>A<sub>i</sub></b> denotes the color of the paint in the <b>i<sup>th</sup></b> bottle. The next line of each test case consists of a single integer <b>M</b>, denoting the number of tattoos that Baahubali has to make. Each of the following <b>M</b> lines contain 2 space separated integers, where the values on the <b>j<sup>th</sup></b> line denote <b>L<sub>j</sub></b> and <b>R<sub>j</sub></b> for the <b>j<sup>th</sup></b> tattoo.</p>

<h3>Output</h3>
<p>For each tattoo, output the value of the color that Baahubali creates using the formula mentioned in the statement above.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>R<sub>i</sub></b> ≤ <b>N</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
5
1 2 3 2 1
5
1 1
1 2
2 4
1 4
1 5
<b>Output:</b>
1
5
8
14
14
</pre>
<h3>Explanation</h3>
<p>For the first tattoo, <b>L = 1</b> and <b>R = 1</b>, and there is only 1 unique color (= <b>1</b>) in that range. Hence, the answer is <b>1</b>.</p>
<p>For the second tattoo, there are 2 unique colors <b>[1, 2]</b>, and the new color formed is 1*1 + 2*2 = <b>5</b>.</p>
<p>For the third tattoo, there are 2 unique colors <b>[2, 3]</b>, and the new color formed is 1*2 + 2*3 = <b>8</b>.</p>
<p>For the fourth and fifth tattoos, there are 3 unique colors <b>[1, 2, 3]</b>, and the new color formed is 1*1 + 2*2 + 3*3 = <b>14</b>.</p>
