---
{"category_name":"easy","problem_code":"KOL16F","problem_name":"Precious Stones","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kol_adm","problem_tester":null,"date_added":"21-12-2016","tags":{"0":"kol_adm"},"time":{"view_start_date":1482831600,"submit_start_date":1482831600,"visible_start_date":1482831600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Nemo went to the shop to buy a chain for his girlfriend. The shopkeeper has shown him a chain made of some expensive stones. The chain has <b>n</b> stones marked from <b>0</b> to <b>n-1</b>. The <b>i<sup>th</sup></b> stone is connected with <b>((i+1)%n)<sup>th</sup></b> stone for each <b>0 ≤ i &lt; n</b>. Each stone can be either Ruby or Amber.</p>

<p>Nemo defines beauty factor <b>B</b> of a chain as the maximum number of consecutive stones of same type. </p>

<img src="https://www.codechef.com/download/upload/ACM16KOL/F.png" height="250" width="250">

<p>In the chain above, the beauty factor is <b>B = 4</b> because there are <b>4</b> consecutive Amber in the chain.</p>

<p>Nemo wants to chose <b>exactly one</b> stone <b>i</b> and exchange it with a stone with different type. So if the <b>i<sup>th</sup></b> stone is ruby, Nemo will exchange it with Amber and vice-versa. He wants to do it in such a way that the value <b>B</b> is as small as possible.</p>

<p>Given the configuration of the chain, can you find the minimum value of <b>B</b> that Nemo can get after exchanging <b>exactly one</b> stone? Note that, It’s not allowed to change positions of the stones, the new stone must be placed in the same position as the original stone. </p>

<h3>Input</h3>
<p>First line contains number of test cases <b>T (1 ≤ T ≤ 2500)</b>. For each test cases, there is a single line containing a string <b>S (1 ≤ |S| ≤ 10<sup>5</sup>)</b> denoting the chain.  Here |S| denotes the length or number of characters in the string. The string is made of only <b>’R’</b> (Ruby) and <b>’A’</b> (Amber). Total number of characters in the input file will be less than <b>5 x 10<sup>6</sup></b>.</p>

<h3>Output</h3>
<p>For each test case, print the case number and the answer in a single line. Look at the output for sample input for details.</p>
<h3>Sample</h3> <pre><b>Input</b>
<p>2
RRRAAAARAA
ARRRRAAA
</p>
<b>Output for Sample Input</b>
<p>Case 1: 3
Case 2: 4
</p></pre>
<h3>Explanation:</h3>

<p>Case <b>1</b> represents the figure in the problem statement. Nemo can exchange one Amber with a Ruby and reduce <b>B</b> to <b>3</b>.</p>

<img src="https://www.codechef.com/download/upload/ACM16KOL/F2.png" height="250" width="250">
