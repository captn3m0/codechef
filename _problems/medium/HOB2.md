---
category_name: medium
problem_code: HOB2
problem_name: 'Hotel Balifornia 2'
languages_supported:
    - C
    - 'CPP 4.9.2'
    - CPP14
    - JAVA
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: anton_lunyov
problem_tester: laycurse
date_added: 14-02-2013
tags:
    - anton_lunyov
    - cook31
    - easy
    - greedy
editorial_url: 'http://discuss.codechef.com/problems/HOB2'
time:
    view_start_date: 1361126701
    submit_start_date: 1361126701
    visible_start_date: 1361126539
    end_date: 1735669800
    current: 1493557694
layout: problem
---
All submissions for this problem are available.I hope all of you remember that Chef built a Hotel Balifornia in Byteland and some complicated scheme for allocating guests, invented by lift boy, was used. But after realizing all badness of this scheme Chef fired lift boy and simplifies the process of allocating guests drastically. Now at the time of check-in each guest only provides the preferable room for him and the number of minutes he will stay in the hotel. After that the hotel manager finds the first available room starting from the provided one assuming that rooms in the hotel are arranged in cyclic manner.

Namely, let there be **R** rooms in the hotel and they are numbered by numbers from  to **R − 1**, inclusive. Suppose guest chooses the room **K**. Then the hotel manager checks rooms in order
**K, K + 1, K + 2, ..., R − 2, R − 1, 0, 1, 2, ..., K − 2, K − 1**
 and allocates the guest in the first free room in this list or report the guest that all rooms are occupied if this is the case./>/>

Chef has a logbook where hotel manager writes down information about each guest. Namely, he records the visit time, the preferable room for the guest (NOT the actual room where guest will live), the staying time and the inconvenience caused to the guest, which equals to the number of occupied rooms that hotel manager checks in the list above before allocating the guest (or **R** if all rooms are occupied). The visit time is provided in minutes after the moment when hotel was opened for visits. Before the first visit all rooms in the hotel were free. When guest leaves the room it could be occupied at the same moment of time by another guest if exactly at this moment the visit occurs.

But lift boy prepared the revenge to the Chef. Just before the inspection of the hotel he has erased the second and the third entry of each visit in the logbook (that is, the preferable room and staying time for each guest). Chef needs to recover the damage quickly since only a few hours left before inspector visit. He knows about your advanced skills in programming and asks you for help. He will be satisfied by any consistent recover of the data. That is, if inspector will reproduce the process of allocating guests using the visit time, the preferable room and the staying time for each guest, he will obtain the correct value of the inconvenience caused to each guest.

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains two space-separated integers **R** and **N**, denoting the number of rooms and the number of visits respectively. The description of **N** damaged records in logbook follows. Namely, each of the following **N** lines contains 2 space separated integers **time** and **inconv**, denoting the time of the visit and inconvenience caused to the guest.

### Output

For each test case output **N** lines. The **i**-th line among them should contain two space separated integers **room** and **stay\_time**, the room chosen by the **i**-th guest and the time he will stay in the hotel, **room** should be from  to **R − 1** inclusive and **stay\_time** should be from **1** to **31415926**, inclusive. If there are several possible answers you can output any of them. But your output should be consistent as stated above. Existence of such answer is always guaranteed for our test data (see **Constraints** section below).

### Constraints

- **1** ≤ **T** ≤ **314159**
- **1** ≤ **R** ≤ **314159**
- **1** ≤ **N** ≤ **314159**
- ≤ **time** < **31415926**
- ≤ **inconv** ≤ **R**
- The sum of **R** over the input does not exceed **314159**
- The sum of **N** over the input does not exceed **314159**
- Visit times will be given in strictly increasing order
- It is guaranteed that records in logbook could be recovered consistently.

**Note that **time** is strictly less than **31415926**. It is quite important.**

### Example

<pre>
<b>Input:</b>
3
1 2
0 0
314 0
5 3
3 0
31 1
314 0
2 3
0 0
1 0
2 2

<b>Output:</b>
0 31
0 31415
4 31
4 314
2 3141
0 3
1 3
0 31415

</pre>### Explanation
**Example case 1.** Here **R = 1** and **N = 2**. Let's check that provided output is consistent. The first guest comes at time 0 and asks for room 0 for 31 minutes. Since the hotel is initially empty we settle him at this room causing zero inconvenience. The second guest comes at time 314 and asks for room 0 for 31415 minutes. The first guest made this room free at time 31 so at time 314 it is free and we settle the second guest at room 0 causing zero inconvenience.

**Example case 2.** Here **R = 5** and **N = 3**. Again let's check that provided output is consistent. The first guest comes at time 3 and asks for room 4 for 31 minutes. Since the hotel is initially empty we settle him at this room causing zero inconvenience. The second guest comes at time 31 and asks for room 4 for 314 minutes. But the first guest is still living in this room (he will free it at time 34). Therefore, we settle the second guest at the room 0 (the next after 4 in cyclic manner) causing inconvenience 1. Finally the third guest comes at time 314 and asks for room 2 for 3141 minutes. This room is free and we settle him at this room causing zero inconvenience.

**Example case 3.** Here **R = 2** and **N = 3**. And again let's check that provided output is consistent. The first guest comes at time 0 and asks for room 0 for 3 minutes. Since the hotel is initially empty we settle him at this room causing zero inconvenience. The second guest comes at time 1 and asks for room 1 for 3 minutes. This room is free and we settle him at this room causing zero inconvenience. The third guest comes at time 2 and asks for room 0 for 31415 minutes. But both rooms in the hotel are occupied (room 0 will be free at time 3 and room 1 will be free at time 4). Hence we do not settle this guest in any room causing him inconvenience 2. Note that stay time of such a guest actually doesn't matter. You could output any number from 1 to 31415926, inclusive, instead of 31415.
