---
{"category_name":"hard","problem_code":"KOL16D","problem_name":"Men and Horses","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":2,"source_sizelimit":40000,"problem_author":"kol_adm","problem_tester":null,"date_added":"21-12-2016","tags":{"0":"kol_adm"},"time":{"view_start_date":1482831600,"submit_start_date":1482831600,"visible_start_date":1482831600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>There are <b>n<sub>m</sub></b> men living in a town. They have  <b>n<sub>h</sub></b> horses, each capable of carrying only one man at a time. All the men are supposed to attend a dinner party <b>d</b> km away from their house. They should start their journey together and reach destination in minimum time. Speed of each man is <b>v<sub>m</sub></b> km/hour whereas speed of each horse (with or without somebody on back) is <b>v<sub>h</sub></b> km/hour. You need to find the minimum time required to complete the journey? For simplicity you can assume the following things:
 <ul>
     
     <li>No time is needed in riding a horse or getting down from a horse.</li>
     <li>The horses are very well trained to execute any instruction given to it.</li>
     <li>No time is needed for changing the direction of horse or man.</li>
     <li>The town and the dinner party location can be considered as two different points and all people and horses travel along the straight line connecting these two points.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>d (0 &lt; d ≤ 10000)</li>
<li>n<sub>m</sub> (1 &lt; n<sub>m</sub> ≤ 1000)</li>
<li>n<sub>h</sub> (0 &lt; n<sub>h</sub> ≤ 1000)</li>
<li>v<sub>m</sub> (0 &lt; v<sub>m</sub> ≤ 20)</li>
<li>v<sub>h</sub> (0 &lt; v<sub>h</sub> ≤ 50)</li>
</ul>

<h3>Input</h3>
<p>Each input set consists of  five integers <b>d, n<sub>m</sub>, n<sub>h</sub>, v<sub>m</sub>,  v<sub>h</sub></b> in a new line. Input ends with five 0s in a line. There will be at max <b>10<sup>5</sup>+1</b> lines in the input</p>
 
<h3>Output</h3>
<p>For each line of input except the last one produce one line of output. This line should print a fraction <b>p</b> by <b>q</b>, in <b>p/q</b> form. This denotes the minimum possible reaching time of all men. Here <b>p</b> and <b>q</b> must be relative prime.</p>
 
<h3>Sample</h3>
<pre><b>Input</b>   
70 2 1 5 10
0 0 0 0 0 

<b>Output</b>
49/5
</pre>

 
