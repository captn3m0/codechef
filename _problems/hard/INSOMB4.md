---
languages_supported:
    - NA
title: INSOMB4
category: NA
old_version: true
problem_code: INSOMB4
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Rohit operated a ball bearings factory. He used to pack his daily production into boxes and judged the number of ball bearings by weighing them. One day, his weighing machine broke. Having no spare machine at hand, he decided to implement a slower, yet accurate method of producing boxes containing the required number of ball bearings. He completely filled a box with ball bearings into which he knew the exact capacity and used a transfer machine to move all the bearings from that box into another box of different capacity. Unfortunately, he cannot specify the number of bearings that have to be transferred between the two boxes. His bearing transfer machine will keep on transferring bearings as long as the destination box is having space and bearings are waiting to be transferred from the source box. Using this machine setup and a set of boxes with known bearing capacities, it is still possible to fill in the production boxes with the required number of bearings in some cases. You need to find out the minimum number of transfers that the bearing transfer machine has to perform to satisfy the quantity requirements of the first production box. There also exists a trash can of infinite capacity into which the bearing transfer machine can transfer all the bearings from a known-capacity box and the bearing transfer machine cannot pickup bearings from a box of unknown or infinite capacity.

For example:

Box 1 can contain 30 bearings.

Box 2 can contain 17 bearings.

Box 3 can contain 5 bearings.



Each production box needs to have 14 bearings in it.



This can be done by:
1\. Filling Box 2 with 17 bearings 

2\. Transferring its contents into Box 1

3\. Filling Box 2 again
4\. Transferring its contents into Box 1 (4 bearings remaining in Box 2)
5\. Box 3 is filled with 5 bearings
6\. Transfer these bearings to Box 2
7\. Fill Box 3 again
8\. Transfer to Box 2 again so that Box 2 contains exactly 14 bearings.
9\. These bearings from Box 2 are then transferred to the production box. />/>/>/>/>/>/>/>/>

Thus, the minimum number of transfers that take place for the first production box is 9.


/>/>

**Input Format:**


Line 1: N - Number of measuring boxes. 1 <= N <= 10


Line 2: N Space separated integers representing the number of ball bearings that can be accommodated into the measuring boxes. These integers will be in the range (0, 50) exclusive.


Line 3: C – The number of ball bearings to be put into the production boxes. 1 <= C <= 100


/>/>/>/>/>

**Output Format:**


Line 1: The minimum number of transfers to be effected for the first production box. In case obtaining the exact number of bearings required in the production boxes is not possible, output -1.

/>/>



**Sample Input:**/>

<pre>
3
30 17 5
14
</pre>

/>

**Sample Output:**

<pre>
9
</pre>