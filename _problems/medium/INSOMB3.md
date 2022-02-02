---
{"languages_supported":{"0":"NA"},"title":"INSOMB3","category":"NA","old_version":true,"problem_code":"INSOMB3","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<div style="font-family: monospace">
Given a matrix of dimensions RxC composed of only two types of characters: <br/><br/><br />
'*' and '#' <br/><br/><br />
 find the number of I characters present in the matrix. The<br />
criteria for identifying an I is as follows:<br />
<br/><br/>
<ul style="font-family: monospace">
<li style="font-family: monospace">
All the characters forming the I are # only.
</li>
<li style="font-family: monospace">
The figure is completely filled with #s.
</li>
<li style="font-family: monospace">
The thickness and width of the top and bottom rectangles is identical.
</li>
<li style="font-family: monospace">
The central column is formed by leaving out floor(width/3) positions on both<br />
sides.
</li>
<li style="font-family: monospace">
The central column may be of any length >= 1
</li>
<li style="font-family: monospace">
The I must be surrounded by "*" or the border (i.e. no additional attachments to the I)
</li>
</ul>
<p><br/></br/></p>
<p>Note: A given input figure is likely to contain multiple I's.</p>
<p><br/><br/><br />
<b>Input Format:</b><br />
<br/><br />
Line 1: R C - Two space separated natural numbers denoting the dimensions of<br />
the rows and columns in the matrix respectively. Both R and C will be less than or equal to 40.<br />
<br/><br />
Line 2 to R+1: Lines containing C space separated symbols. The symbols are<br />
chosen from the set {*, #}</br/></br/></br/></br/></p>
<p><br/><br/><br />
<b>Output Format:</b><br />
<br/><br />
Line 1: The number of I's in the given figure. </br/></br/></br/></p>
<p><br/><br/><br />
<b>Sample Input:</b></br/></br/></p>
<pre>
10 10
# # # # # # # # # #
# # # # # # # # # #
* * * # # # # * * *
* * * # # # # * * *
* * * # # # # * * *
* * * # * # # # * *
* * * # # # # * * *
* * * # # # # * * *
# # # # # # # # # #
# # # # # # # # # #
</pre><p><br/><br />
<b>Sample Output:</b></br/></p>
<pre>
0
</pre><p>
<br/><br />
Explanation: The given I is invalid because of 2 reasons:<br />
<br/><br />
It is not completely filled<br />
<br/><br />
It has an extra attachment of a # on the right side of the central column.<br />
<br/>
</br/></br/></br/></br/></p></br/></br/></br/></br/></br/></br/></div>
    