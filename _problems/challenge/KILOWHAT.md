---
category_name: challenge
problem_code: KILOWHAT
problem_name: 'A Fence for Byteland'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: pieguy
problem_tester: anton_lunyov
date_added: 9-11-2012
tags:
    - challenge
    - jan13
    - pieguy
    - polygons
editorial_url: 'http://discuss.codechef.com/problems/KILOWHAT'
time:
    view_start_date: 1358247801
    submit_start_date: 1358247801
    visible_start_date: 1358242651
    end_date: 1735669800
    current: 1525454420
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Byteland is in turmoil! The citizens of Byteland cannot agree on how many bytes are in a kilobyte. Members of the Decocratic party claim there are 1000 bytes in a kilobyte, and members of the Rebytelican party insist there are 1024 bytes in a kilobyte. The country is on the verge of a civil war. These times call for drastic measures, and Chef has decided the only option is to build a fence separating the citizens based on their opinions. Once the fence is built, the Decocrats should be fully separated from the Rebytelicans. Note that the fence is allowed to pass through the location of a citizen.

Chef wants your help in designing the fence. Chef will be happy as long as the fence separates the citizens properly, but would prefer a shorter fence. You'll be given a map of the city, and need to produce a polygonal fence that separates the citizens. The polygon must be strictly non-self-intersecting (that is, no two edges may cross, and no vertex may belong to more than two edges). Additionally, one of the following must be true:

- All Decocrats are inside or on the border of the polygon, and all Rebytelicans are outside or on the border of the polygon, or
- All Decocrats are outside or on the border of the polygon, and all Rebytelicans are inside or on the border of the polygon.

### Input

Input will begin with an integer **N**, the number of citizens in Byteland. **N** lines follow with 3 integers each: the **x** and **y** coordinates of the citizen, and the number of bytes the citizen believes are in a kilobyte (this will always be either 1000 or 1024).

### Output

First, output the number of vertices in your polygon. It should be an integer from 3 to 1000, inclusive. Then output the vertices of your polygon in order, **x** coordinate then **y** coordinate. All coordinates must be integers with absolute value at most 2000. All vertices must be distinct.

Just to reiterate, you output will be accepted if and only if all of the following conditions are satisfied:

- Let **L** be the number of vertices in your polygon. Output must contain exactly **2 \* L + 1** integers separated by spaces or line breaks, with first integer in the output equal to **L**.
- The number of vertices of your polygon (that is **L**) lies between 3 and 1000, inclusive.
- Coordinates of all vertices of your polygon must be integers with absolute value at most 2000.
- All vertices of your polygon are distinct (which actually follows from the next condition).
- Every two non-consecutive sides of your polygon have no common points considered as closed segments on the plane (it is equivalent formulation of strictly non-self intersecting property of the polygon described above).
- Your polygon separates Decocrats and Rebytelicans as described above (which is, of course, the most important condition).

### Scoring

Let **D** be the greatest distance between any two citizens, and **P** the perimeter of your polygon (the sum of the lengths of all the sides). Your score is then calculated as **10 \* P / (D \* sqrt(N))**. The score of the submission is the average score over all test files. Smaller scores will earn more points.

### Example

<pre>
<b>Input:</b>
16
1 1 1024
1 2 1024
1 3 1024
1 4 1000
2 1 1000
2 2 1000
2 3 1000
2 4 1024
3 1 1000
3 2 1024
3 3 1000
3 4 1000
4 1 1000
4 2 1024
4 3 1024
4 4 1024

<b>Output:</b>
5
4 1
3 2
3 4
1 4
2 1
</pre>### Explanation

For this sample output, the Decocrats at (2, 2) and (2, 3) are inside the fence. The Rebytelicans at (1, 1), (1, 2), (1, 3), (4, 2), (4, 3), (4, 4) are outside the fence. Everyone else is on the border of the fence. Here **D** = 3 \* sqrt(2) = 4.2426, **P** = sqrt(2) + 2 + 2 + sqrt(10) + 2 = 10.5765, and **N** = 16. The sample output would therefore score 10 \* 10.5765 / (4.2426 \* sqrt(16)) = 6.2323. Note that this output is optimal for this case. But you can output any polygon satisfying constraints above in order to get Accepted.

### Test Case Generation

There are two test case generation methods, each making up half of the test cases.

In the first method, **N** is chosen randomly between 100 and 200, inclusive. A real value **Q** is chosen randomly between 0.2 and 0.8, inclusive. Then **N** distinct points are chosen randomly with **x** and **y** coordinates between 1 and 1000, inclusive. Each point will be a Decocrat with probability **Q**, and a Rebytelican with probability (1-**Q**).

In the second method, two integers **W** and **H** are chosen randomly between 10 and 14, inclusive. Two integers **dW** and **dH** are chosen randomly between 20 and 70, inclusive. A real value **Q** is chosen randomly between 0.2 and 0.8, inclusive. **N** is set to **W** \* **H**, and the **N** points are generated as (**dW**\***i**, **dH**\***j**) with **i** ranging from 1 to **W**, inclusive, and **j** ranging from 1 to **H**, inclusive. Each point will be a Decocrat with probability **Q**, and a Rebytelican with probability (1-**Q**).

Note that example does not satisfy any of these schemes. But it is guaranteed that every official test file will satisfy one of these schemes.

### Hint

In order to get Accepted you could simply output a polygon having all citizens on its border. It means that your answer will be accepted if, for example, you output some strictly non-self-intersecting polygon such that each citizen lies on its border. Actually, it is even possible to output all citizens in some order to get AC. (All these details on the hint have already contained in the comments.)
