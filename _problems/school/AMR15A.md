---
{"category_name":"school","problem_code":"AMR15A","problem_name":"Mahasena","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"suh_ash2008","problem_tester":null,"date_added":"6-10-2015","tags":{"0":"acmamr15","1":"easy","2":"simple","3":"simulation","4":"suh_ash2008"},"editorial_url":"http://discuss.codechef.com/problems/AMR15A","time":{"view_start_date":1444574100,"submit_start_date":1444574100,"visible_start_date":1444574100,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Kattapa, as you all know was one of the greatest warriors of his time. The kingdom of Maahishmati had never lost a battle under him (as army-chief), and the reason for that was their really powerful army, also called as <b>Mahasena</b>.</p>

<p>Kattapa was known to be a very superstitious person. He believed that a soldier is "lucky" if the soldier is holding an <b>even number</b> of weapons, and "unlucky" otherwise. He considered the army as "READY FOR BATTLE" if the count of "lucky" soldiers is strictly greater than the count of "unlucky" soldiers, and "NOT READY" otherwise.</p>

<p>Given the number of weapons each soldier is holding, your task is to determine whether the army formed by all these soldiers is "READY FOR BATTLE" or "NOT READY".</p>

<p><b>Note</b>: You can find the definition of an even number <a href="https://simple.wikipedia.org/wiki/Even_number">here</a>.</p>

<h3>Input</h3>
<p>
The first line of input consists of a single integer <b>N</b> denoting the number of soldiers. The second line of input consists of <b>N</b> space separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>, where <b>A<sub>i</sub></b> denotes the number of weapons that the <b>i</b><sup>th</sup> soldier is holding.</p>

<h3>Output</h3>
<p>Generate one line output saying "READY FOR BATTLE", if the army satisfies the conditions that Kattapa requires or "NOT READY" otherwise (quotes for clarity).</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>100</b></li>
</ul>

<h3>Example 1</h3>
<pre><b>Input:</b>
1
1

<b>Output:</b>
NOT READY
</pre>


<h3>Example 2</h3>
<pre><b>Input:</b>
1
2

<b>Output:</b>
READY FOR BATTLE
</pre>


<h3>Example 3</h3>
<pre><b>Input:</b>
4
11 12 13 14

<b>Output:</b>
NOT READY
</pre>


<h3>Example 4</h3>
<pre><b>Input:</b>
3
2 3 4

<b>Output:</b>
READY FOR BATTLE
</pre>


<h3>Example 5</h3>
<pre><b>Input:</b>
5
1 2 3 4 5

<b>Output:</b>
NOT READY
</pre>

<h3>Explanation</h3>
<p><ul>
<li><b>Example 1</b>: For the first example, <b>N = 1</b> and the array <b>A = [1]</b>. There is only 1 soldier and he is holding 1 weapon, which is odd. The number of soldiers holding an even number of weapons = 0, and number of soldiers holding an odd number of weapons = 1. Hence, the answer is "NOT READY" since the number of soldiers holding an even number of weapons is not greater than the number of soldiers holding an odd number of weapons.</li>
<p></p>
<li><b>Example 2</b>: For the second example, <b>N = 1</b> and the array <b>A = [2]</b>. There is only 1 soldier and he is holding 2 weapons, which is even. The number of soldiers holding an even number of weapons = 1, and number of soldiers holding an odd number of weapons = 0. Hence, the answer is "READY FOR BATTLE" since the number of soldiers holding an even number of weapons is greater than the number of soldiers holding an odd number of weapons.</li>
<p></p>
<li><b>Example 3</b>: For the third example, <b>N = 4</b> and the array <b>A = [11, 12, 13, 14]</b>. The 1<sup>st</sup> soldier is holding 11 weapons (which is odd), the 2<sup>nd</sup> soldier is holding 12 weapons (which is even), the 3<sup>rd</sup> soldier is holding 13 weapons (which is odd), and the 4<sup>th</sup> soldier is holding 14 weapons (which is even). The number of soldiers holding an even number of weapons = 2, and number of soldiers holding an odd number of weapons = 2. Notice that we have an <b>equal</b> number of people holding even number of weapons and odd number of weapons. The answer here is "NOT READY" since the number of soldiers holding an even number of weapons is <b>not strictly greater than</b> the number of soldiers holding an odd number of weapons.</li>
<p></p>
<li><b>Example 4</b>: For the fourth example, <b>N = 3</b> and the array <b>A = [2, 3, 4]</b>. The 1<sup>st</sup> soldier is holding 2 weapons (which is even), the 2<sup>nd</sup> soldier is holding 3 weapons (which is odd), and the 3<sup>rd</sup> soldier is holding 4 weapons (which is even). The number of soldiers holding an even number of weapons = 2, and number of soldiers holding an odd number of weapons = 1. Hence, the answer is "READY FOR BATTLE" since the number of soldiers holding an even number of weapons is greater than the number of soldiers holding an odd number of weapons.</li>
<p></p>
<li><b>Example 5</b>: For the fifth example, <b>N = 5</b> and the array <b>A = [1, 2, 3, 4, 5]</b>. The 1<sup>st</sup> soldier is holding 1 weapon (which is odd), the 2<sup>nd</sup> soldier is holding 2 weapons (which is even), the 3<sup>rd</sup> soldier is holding 3 weapons (which is odd), the 4<sup>th</sup> soldier is holding 4 weapons (which is even), and the 5<sup>th</sup> soldier is holding 5 weapons (which is odd). The number of soldiers holding an even number of weapons = 2, and number of soldiers holding an odd number of weapons = 3. Hence, the answer is "NOT READY" since the number of soldiers holding an even number of weapons is not greater than the number of soldiers holding an odd number of weapons.</li>
</ul></p>