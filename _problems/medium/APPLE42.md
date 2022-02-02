---
{"category_name":"medium","problem_code":"APPLE42","problem_name":"Apples and Oranges","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"jafarbadour","problem_tester":null,"date_added":"26-09-2019","tags":{"0":"computational","1":"convolution","2":"deadwing97","3":"jafarbadour","4":"ltime76"},"problem_difficulty_level":"Medium","best_tag":"Computational Geometry","editorial_url":"https://discuss.codechef.com/problems/APPLE42","time":{"view_start_date":1569690002,"submit_start_date":1569690002,"visible_start_date":1569690002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=APPLE42","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME76/hindi/APPLE42.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME76/bengali/APPLE42.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME76/mandarin/APPLE42.pdf), [Russian](https://www.codechef.com/download/translated/LTIME76/russian/APPLE42.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME76/vietnamese/APPLE42.pdf) as well.

Merlin likes apples and oranges a lot — after all, who doesn't! One day, Merlin bought $N$ apples and $M$ oranges. However, on his way home, a magical force made him fall and the fruits were scattered on the floor (a 2D plane). For each fruit, you are given its coordinates $(x, y)$ on the plane.

To investigate this issue, Merlin hired you to separate the apples from the oranges by drawing a straight line on the floor. The line must have positive thickness, since it would not be visible otherwise. Fruits may not lie in the line, only outside or on its border. Finally, the line separates the plane into two parts; all apples must lie in one part and all oranges must lie in the other part.

Merlin is obsessed with perfection, so he wants you to draw a line with the maximum possible thickness. Find this maximum thickness or state that it is impossible to draw any valid line.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the next $N$ lines contains two space-separated integers $x$ and $y$ denoting the coordinates of an apple.
- The next line contains a single integer $M$.
- Each of the next $M$ lines contains two space-separated integers $x$ and $y$ denoting the coordinates of an orange.

### Output
For each test case, if it is impossible to draw a line with positive thickness, print a single line containing the integer $-1$.

Otherwise, print a single line containing one real number — the maximum thickness. Your answer will be considered correct if its absolute or relative error does not exceed $10^{-6}$.

### Constraints
- $1 \le T \le 1,000$
- $3 \le N, M \le 10^5$
- $|x|, |y| \le 10^9$
- the sum of $N$ over all test cases does not exceed $10^6$
- the sum of $M$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points)**:
- $1 \le N, M \le 1,000$
- the sum of $N$ over all test cases does not exceed $10,000$
- the sum of $M$ over all test cases does not exceed $10,000$

**Subtask #2 (50 points)**: original constraints


### Example Input
```
2
3
-1 0
1 0
0 2
3
-1 2
1 2
0 4
3
-1 0
1 0
0 2
3
-1 3
1 3
0 5
```

### Example Output
```
-1
1
```
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>