---
{"category_name":"hard","problem_code":"KOL16G","problem_name":"Optimal use of Nuclear Power plant ","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"kol_adm","problem_tester":null,"date_added":"21-12-2016","tags":{"0":"kol_adm"},"time":{"view_start_date":1482831600,"submit_start_date":1482831600,"visible_start_date":1482831600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>It is now 2050 AD. A city will be built under large protective circular dome. A nuclear power plant <b>(NPP)</b>  built outside the city will power the whole city. For safety reasons the <b>NPP</b> must be at least <b>d<sub>min</sub> </b>distance away from the dome. The radius of the dome has not been fixed yet. The houses inside the dome will be built after building the dome. So for simplicity it can be assumed that each location under the dome is equally likely to have a house. In other words houses will be uniformly distributed in the land inside the dome. As the houses are full of modern electrical equipments, so the power consumption per house is quite high. So each house is connected with the <b>NPP</b> with the shortest possible cable underground. In the figure below you can see four houses (Blue circles) and their shortest connection with <b>NPP</b> (dotted line). For wiring cost and line-loss issues the average distance of the houses (assuming they are uniformly distributed under then dome) from the <b>NPP</b> cannot be more than <b>D<sub>avg</sub></b>. 
</p>

<img src="https://www.codechef.com/download/upload/ACM16KOL/G.png" height="250">


<p>Given the value of <b>D<sub>avg</sub>, d<sub>min</sub></b> your job is to find the maximum possible value of the radius of the land under dome.</p>

<h3>Input</h3>
<p>First line of the input file contains an integer <b>T (0 &lt; T ≤ 20)</b> which denotes how many test cases to follow. Each of the next <b>T</b> lines contains two strictly positive integers <b>D<sub>avg</sub> (0 &lt; D<sub>avg</sub> &lt;1000)</b> and <b>d<sub>min</sub> (0 &lt; d<sub>min</sub> &lt; D<sub>avg</sub>)</b>. The meaning of <b>D<sub>avg</sub></b> and <b>d<sub>min</sub></b> are given in the problem statement above.</p>




<h3>Output</h3> 
<p>For each test case produce one line of output. This line contains a floating-point number <b>R<sub>max</sub></b>, which denotes maximum possible value of the radius of the circular land under the dome maintaining the constraints imposed by <b>D<sub>avg</sub></b> and <b>d<sub>min</sub></b>. This value should be rounded to four digits after the decimal point. Errors not exceeding <b>1.5 * 10<sup>-4</sup></b> will be ignored.</p>

<h3>Sample</h3> 
<pre><b>Input</b>
2
100 20
10 5

<b>Output</b>
72.6679
4.7114
</pre>


