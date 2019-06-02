---
category_name: medium
problem_code: KOL15B
problem_name: 'Finding Hardest Sum Value'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: devuy11
problem_tester: null
date_added: 11-10-2015
tags:
    - acmkol15
    - devuy11
    - dynamic
    - easy
    - kadane
    - maximum
    - maximum
    - maxsum
editorial_url: 'http://discuss.codechef.com/problems/KOL15B'
time:
    view_start_date: 1446296400
    submit_start_date: 1446296400
    visible_start_date: 1446296400
    end_date: 1735669800
    current: 1525454398
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Ramesh, Suresh, Mahesh, and Mukesh are moving to a new city and are looking for apartments to live.

Now this city is not like any other city. This city is a matrix of apartments and there are no roads. The only way to commute is to go through apartments.

If any of the friends go through an apartment even once, the group will have to pay its full rent. From an apartment, you can go to the apartments to its North, South, East, or West.

Since Ramesh, Suresh, Mahesh, and Mukesh are best friends, they want to meet each other at least once a month. Also, all four are highly superstitious, so Ramesh only goes West, Suresh only goes North, Mahesh only goes East, and Mukesh only goes South.

Any number of people can live in any of the apartments. Cost of all the apartments in the city is given, some of which may be negative. Negative cost means if any of the friend lives in or goes through this apartment, the group will get paid an amount equal to the negation of the cost. Now the aim of the four friends is to find the minimum cost for which all of them can live in the city and meet each other at least once a month.

**Note:** The four friends can meet in an apartment where none of them actually lives as well.

### Input

First line contains **T**, the number of test cases to follow.

First line of each test case contains two integers: **N** and **M**, where **N** denotes the number of rows in the matrix and **M** denotes number of columns in the matrix.

Next **N** lines describe the rows of the matrix follow, one row per line. Each row contains **M** space-separated integers denoting the cost of the apartment.

### Output

For each test cases, output the minimum cost as asked in the problem.

### Constraints

- **1** ≤ **T** ≤ **4\*104**
- **1** ≤ **N** ≤ **103**
- **1** ≤ **M** ≤ **103**
- **-104** ≤ **Cost of any apartment** ≤ **104**
- **1** ≤ **Sum of N\*M over all test cases** ≤ **106**

### Example

<pre><b>Input:</b>
4
3 3
1 2 3
4 -10 5
6 7 8
3 3
1 -10 3
-13 -12 -11
7 8 9
3 3
1 -2 3
-4 5 -6
7 -8 9
4 4
1 2 3 4
5 6 -7 8
-9 -10 -11 -12
13 14 -15 16

<b>Output:</b>
-10
-46
-15
-64
</pre>
### Explanation

**Example case 1.**All 4 friends stay at the apartment which has rent -10.

**Example case 2.**Mukesh lives in the apartment with rent -10, Mahesh lives in the apartment with rent -13, Suresh lives in the apartment with rent -12, and Ramesh lives in the apartment with rent -11

**Example case 3.**Mukesh lives in the apartment with rent -2, Mahesh lives in the apartment with rent -4, Suresh lives in the apartment with rent -8, and Ramesh lives in apartment with rent -6. They all meet at the apartment with rent 5. So the total cost becomes (-2) + (-6) + (-4) + (-8) + (5) = -15

**Example case 4.**Mukesh lives in the apartment with rent -7, Mahesh lives in the apartment with rent -9, Suresh lives in the apartment with rent -15, and Ramesh lives in the apartment with rent -12. They all meet at the apartment with rent -11. So the total cost becomes -7-9-10-11-12-15 = -64
