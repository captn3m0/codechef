---
{"category_name":"medium","problem_code":"AMR15B","problem_name":"Devasena","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"suh_ash2008","problem_tester":null,"date_added":"10-10-2015","tags":{"0":"acmamr15","1":"medium","2":"number","3":"suh_ash2008"},"editorial_url":"http://discuss.codechef.com/problems/AMR15B","time":{"view_start_date":1453401000,"submit_start_date":1453401000,"visible_start_date":1453401000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Devasena was the princess of an unknown kingdom (we'll all know which one, in Baahubali 2 ;) ), and her father arranged for a <a herf="https://en.wikipedia.org/wiki/Swayamvara">Swayamvara</a> to get her married. He gave all of them a question, and the question was so hard that nobody was able to answer it (Yes you guessed it right, both Baahubali and Bhallaladeva were not present there for the Swayamvara). We all know that Amarendra Baahubali married her later and as a consequence of so many things, she was imprisoned for 25 years. Who knows, if someone else had answered the question that day, then she would have got married to him and things could have been different. Phew! But the bad part, we wouldn't have had the story of Baahubali. :) </p>

<p>Although everything is history now, recently archaeologists discovered the secret question that was asked at the Swayamvara, and you think - "Well, it's such a simple question. I could use a computer to solve it!". The question goes as follows: </p>

<p>
You are given <b>N</b> integers (not necessarily distinct) => <b>A<sub>1</sub>, A<sub>2</sub>, A<sub>3</sub>, ..., A<sub>N</sub></b>. There are <b>2<sup>N</sup></b> possible subsets (including the empty subset). The <b>GCD</b> of a subset is defined as the greatest common divisor of all the integers in that subset. You need to find the product of the <b>GCDs</b> of all the <b>2<sup>N</sup></b> possible subsets you can construct from <b>A</b>. Since the answer can be large, you need to output the answer modulo <b>1000000007</b>. Do you think you can solve this question?
</p>

<p><b>Note</b>: The greatest common divisor of an empty subset is <b>1</b>. To know more about the definition of greatest common divisor, check <a href="https://en.wikipedia.org/wiki/Greatest_common_divisor">here</a>.
<p></p>
<h3>Input</h3>
<p>The first line of input consists of a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follow. The first line of each test case consists of a single integer <b>N</b>. The second line of each test case consists of <b>N</b> space separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b></p>

<h3>Output</h3>
<p>For each test case, output an single integer on a separate line denoting the answer for that test case. Note that you need to output all the values modulo <b> 1000000007 (10<sup>9</sup> + 7)</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>30</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
1
1
2
1 2
3
1 2 2

<b>Output:</b>
1
2
8
</pre>

<h3>Explanation</h3>
<p><b>For the first test case</b>, <b>N = 1</b>, and <b>A = [1]</b>. There are 2 possible subsets => <b>{}, {1}</b> and both have a gcd of 1. Hence, the answer is 1 * 1 = <b>1</b>.</p>
<p><b>For the second test case</b>, <b>N = 2</b>, and <b>A = [1, 2]</b>. There are 4 possible subsets => <b>{}, {1}, {2}, {1, 2}</b>, having a gcd of 1, 1, 2 and 1 respectively. Hence, the answer is 1 * 1 * 2 * 1 = <b>2</b>.</p>
<p><b>For the third test case</b>, <b>N = 3</b>, and <b>A = [1, 2, 2]</b>. There are 8 possible subsets => <b>{}, {1}, {2}, {2}, {1, 2}, {2, 2}, {1, 2}, {1, 2, 2}</b>, having a gcd of 1, 1, 2, 2, 1, 2, 1, 1. Hence, the answer is 1 * 1 * 2 * 2 * 1 * 2 * 1 * 1 = <b>8</b>.</p>