---
languages_supported:
    - NA
title: SUPERPLN
category: NA
old_version: true
problem_code: SUPERPLN
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

 Dunno was invited by Roly-Poly to his birthday party. But he don't know how to get to Roly-Poly. So Dunno turned for advice to Doono. Doono reminded him that their country of shorties have a network of super-planes airlines, which can move not only in space but also in time. Thanks to a super engine, developed by Doono and constructed by Bendum and Twistum, such aircraft, flying from one city could get to the other even before they departed.

 Dunno rejoiced and rushed into the super-airport. Not thinking through his route, Dunno began to fly at super-planes aimlessly, i.e. boarded the next flight out of that city, where he was. Dunno flies until he reaches the city where Roly-Poly lives not later than the start time of the birthday party, or until it reaches a certain city, where no longer be able to fly away. The closest flight is a flight in the same city, for which the departure time is not less than the arrival time of Dunno in this city, and the difference between these time points is minimal.

 Write a program, that determines whether Dunno ever gets to Roly-Poly given the schedule of the super-plane flights. If he gets the party in time then find also the number of flights he uses.

### Input

 The first line contains a single positive integer **T &lt;= 10**, the number of test cases. **T** test cases follow. The first line of each test case contains the number of available flights **N (0 &lt;= N &lt;= 10000)** . Each of the following **N** lines contains 4 space-separated integers **C1, T1, C2, T2**, where **C1** is the departure city, **T1** is departure time, **C2** is the destination city, **T2** is arrival time. It is guaranteed that there are no flights with the same departure city and time. The last line of each test case contains the city where Dunno lives, the time when he came to the super-airport, the city where Roly-Poly lives and the time when the birthday party starts. All city numbers are positive integers not greater than **10000** and all time points are not greater than **100000** in absolute value.

### Output

For each test case, output a single line containing the word **"Yes"** followed by space and the number of flights that the Dunno uses if he gets the Roly-Poly birthday party in time and **"No"** otherwise.

### Example

<pre>
<b>Input:</b>
3
3
1 3 4 3
4 4 3 5
3 10 2 -1
1 2 2 0
1
1 2 3 0
1 2 2 2
2
2 0 2 0
2 1 4 0
2 0 4 0

<b>Output:</b>
Yes 3
No
No
</pre>