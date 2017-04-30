---
languages_supported:
    - NA
title: OVENTIME
category: NA
old_version: true
problem_code: OVENTIME
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

The Chef has thought of another way to generate revenue for his restaurant. He has a large oven to bake his goods, but he has noticed that not all of the racks are used all of the time. If a rack is not used, then the Chef has decided to rent it out for others to use. The Chef runs a very precise schedule; he knows in advance exactly how many racks will be free to rent out at any given time of the day.

This turns out to be quite a profitable scheme for the Chef. Apparently many people were interested in the idea of renting space in an industrial oven. The Chef may need to turn down some of the requests because of lack of oven space.

Each request comes in the form of a start time s, an end time e, and a value v. This means that someone has requested to use a single rack in the oven from time s until time e-1 (i.e. the item is removed just before time e so another request may use that rack starting at time e). If this request is satisfied, the Chef receives v dollars in payment.

Help the Chef determine the maximum possible profit he can receive from the collection of requests. That is, find the largest total profit of a subset S of requests such that at any point in time the number of requests in S that require a rack during that time does not exceed the number of free racks at that time.

### Input

The first line of input contains a single integer indicating the number of test cases T ≤ 50. Each test case begins with two integers n,m with 1 ≤ n ≤ 100 and 1 ≤ m ≤ 50. This means there are n requests to process and the oven is available from time 0 to time m.

Each of the following n lines describes a request and consists of three integers s, e, and v. The numbers satisfy 0 ≤ s < e ≤ m and 1 ≤ v ≤ 1000. This means that the request requires use of a single rack in the oven during time units s, s+1, ..., e-1 and will pay v dollars if the request is satisfied.

Finally, a line follows with m integers c0, c1, ..., cm-1, each between 1 and 25. These indicate that at each time i, 0 ≤ i < m, there are ci racks available to rent.

Test cases are separated by a single blank line including a blank line preceding the first test case.

### Output

The output for each test case consists of a single integer indicating the maximum total value the Chef can receive from a subset of requests which can all be satisfied. Recall that we say a subset S of requests can be satisfied if at any time 0 ≤ t < m that the number of requests in S that require the oven at time t does not exceed ct.

### Example

```

<b>Input:</b>
1

4 4
0 1 2
1 2 2
2 4 2
0 3 5
2 1 1 1

<b>Output:</b>
7

```
### Explanation of Sample Output

In the given test case, a profit of 7 can be obtained by satisfying the first and last request in the input. Time 0 has 2 free racks and both are used by these requests. Times 1 and 2 have only 1 free rack but these times are not required by the first request so there are enough racks to accommodate the requests at these times.

Now, the last time 3 has a free rack that is not being used. The second last request requires a rack at this time, but it cannot be added because it also requires a rack at time 2, which is already being used by the last request.