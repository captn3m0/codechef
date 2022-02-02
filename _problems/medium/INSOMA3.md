---
{"languages_supported":{"0":"NA"},"title":"INSOMA3","category":"NA","old_version":true,"problem_code":"INSOMA3","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p>Stepford Street was a dead end street. The houses on Stepford Street were bought by wealthy millionaires. They had them extensively altered so that as one progressed along the street, the height of the buildings increased rapidly. However, not all millionaires were created equal. Some refused to follow this trend and kept their houses at their original heights. The resulting progression of heights was thus disturbed. </p>
<p>
A contest to locate the most ordered street was announced by the Beverly Hills Municipal Corporation. The criteria for the most ordered street was set as follows:</p>
<p>
If there exists a house with a lower height later in the street than the house under consideration, then the pair (current house, later house) counts as 1 point towards the disorderliness index of the street. It is not necessary that the later house be adjacent to the current house.
</p>
<p>
Note: No two houses on a street will be of the same height
</p>
<p>
For example, for the input:
</p>
<p>
1 2 4 5 3 6
</p>
<p>
The pairs (4,3), (5,3) form disordered pairs. Thus the disorderliness index of this array is 2.
</p>
<p>
As the criteria for determining the disorderliness is complex, the BHMC has requested your help to automate the process. You need to write an efficient program that calculates the disorderliness index of a street.
</p>
<h3>Input</h3>
<p>Line 1: N &#8211; The size of the array. 1 &lt;= N &lt;= 10^5<br/><br />
Line 2: N integers denoting the heights of the various buildings in order of their locations on the street.
</br/></p>
<h3>Output</h3>
<p>Line 1: The disorderliness index of the street.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
6
1 2 4 5 3 6


<b>Output:</b>
2
</pre>    