---
{"languages_supported":{"0":"NA"},"title":"INSOMB4","category":"NA","old_version":true,"problem_code":"INSOMB4","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p>Rohit operated a ball bearings factory. He used to pack his daily production into boxes and judged the number of ball bearings by weighing them. One day, his weighing machine broke. Having no spare machine at hand, he decided to implement a slower, yet accurate method of producing boxes containing the required number of ball bearings. He completely filled a box with ball bearings into which he knew the exact capacity and used a transfer machine to move all the bearings from that box into another box of different capacity. Unfortunately, he cannot specify the number of bearings that have to be transferred between the two boxes. His bearing transfer machine will keep on transferring bearings as long as the destination box is having space and bearings are waiting to be transferred from the source box. Using this machine setup and a set of boxes with known bearing capacities, it is still possible to fill in the production boxes with the required number of bearings in some cases. You need to find out the minimum number of transfers that the bearing transfer machine has to perform to satisfy the quantity requirements of the first production box.  There also exists a trash can of infinite capacity into which the bearing transfer machine can transfer all the bearings from a known-capacity box and the bearing transfer machine cannot pickup bearings from a box of unknown or infinite capacity.</p>
<p>For example:<br/><br />
Box 1 can contain 30 bearings.<br/><br />
Box 2 can contain 17 bearings.<br/><br />
Box 3 can contain 5 bearings.<br/><br />
<br/><br />
Each production box needs to have 14 bearings in it.<br />
<br/><br/><br />
This can be done by:<br />
1. Filling Box 2 with 17 bearings <br/><br />
2. Transferring its contents into Box 1<br/><br />
3. Filling Box 2 again<br />
4. Transferring its contents into Box 1 (4 bearings remaining in Box 2)<br />
5.  Box 3 is filled with 5 bearings<br />
6.  Transfer these bearings to Box 2<br />
7.  Fill Box 3 again<br />
8.  Transfer to Box 2 again so that Box 2 contains exactly 14 bearings.<br />
9.  These bearings from Box 2 are then transferred to the production box. </br/></br/></br/></br/></br/></br/></br/></br/></br/></p>
<p>Thus, the minimum number of transfers that take place for the first production box is 9.<br />
<br/><br/></br/></br/></p>
<p><b>Input Format:</b><br />
<br/><br />
Line 1: N - Number of measuring boxes. 1 &lt;= N &lt;= 10<br />
<br/><br />
Line 2: N Space separated integers representing the number of ball bearings that can be accommodated into the measuring boxes. These integers will be in the range (0, 50) exclusive.<br />
<br/><br />
Line 3: C &#8211; The number of ball bearings to be put into the production boxes. 1 &lt;= C &lt;= 100<br />
<br/><br/></br/></br/></br/></br/></br/></p>
<p><b>Output Format:</b><br />
<br/><br />
Line 1: The minimum number of transfers to be effected for the first production box. In case obtaining the exact number of bearings required in the production boxes is not possible, output -1.<br />
<br/></br/></br/></p>
<p><br/><br />
<b>Sample Input:</b></br/></p>
<pre>
3
30 17 5
14
</pre><p><br/></br/></p>
<p><b>Sample Output:</b></p>
<pre>
9
</pre>    