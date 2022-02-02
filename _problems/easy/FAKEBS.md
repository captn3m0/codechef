---
{"category_name":"easy","problem_code":"FAKEBS","problem_name":"Fake Binary Search","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"abdullah768","problem_tester":null,"date_added":"25-04-2018","tags":{"0":"abdullah768","1":"binary","2":"may18"},"editorial_url":"https://discuss.codechef.com/problems/FAKEBS","time":{"view_start_date":1526290200,"submit_start_date":1526290200,"visible_start_date":1526290200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/MAY18/mandarin/FAKEBS.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/MAY18/russian/FAKEBS.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/MAY18/vietnamese/FAKEBS.pdf" target="_blank">Vietnamese</a> as well.</h3>

"If you didn't copy assignments during your engineering course, did you even do engineering?"

There are $Q$ students in Chef's class. Chef's teacher has given the students a simple assignment:

Write a function that takes as arguments an array $A$ containing only unique elements and a number $X$ guaranteed to be present in the array and returns the ($1$-based) index of the element that is equal to $X$.

The teacher was expecting a linear search algorithm, but since Chef is such an amazing programmer, he decided to write the following binary search function:

```
integer binary_search(array a, integer n, integer x):
    integer low, high, mid
    low := 1
    high := n
    while low ≤ high:
        mid := (low + high) / 2
        if a[mid] == x:
            break
        else if a[mid] is less than x:
            low := mid+1
        else:
            high := mid-1
    return mid
```

All of Chef's classmates have copied his code and submitted it to the teacher.

Chef later realised that since he forgot to sort the array, the binary search algorithm may not work. Luckily, the teacher is tired today, so she asked Chef to assist her with grading the codes. Each student's code is graded by providing an array $A$ and an integer $X$ to it and checking if the returned index is correct. However, the teacher is lazy and provides the exact same array to all codes. The only thing that varies is the value of $X$.

Chef was asked to type in the inputs. He decides that when typing in the input array for each code, he's not going to use the input array he's given, but an array created by swapping some pairs of elements of this original input array. However, he cannot change the position of the element that's equal to $X$ itself, since that would be suspicious.

For each of the $Q$ students, Chef would like to know the minimum number of swaps required to make the algorithm find the correct answer.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$ denoting the number of elements in the array and the number of students.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.
- The following $Q$ lines describe queries. Each of these lines contains a single integer $X$.

### Output
For each query, print a single line containing one integer — the minimum required number of swaps, or $-1$ if it is impossible to make the algorithm find the correct answer. (Do you really think Chef can fail?)

### Constraints 
- $1 \le T \le 10$
- $1 \le N, Q \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- $1 \le X \le 10^9$
- all elements of $A$ are pairwise distinct
- for each query, $X$ is present in $A$
- sum of $N$ over all test cases $\le 5\cdot10^5$
- sum of $Q$ over all test cases $\le 5\cdot10^5$

### Subtasks
**Subtask #1 (20 points):** $1 \le N \le 10$

**Subtask #2 (30 points):**
- $1 \le A_i \le 10^6$ for each valid $i$
- $1 \le X \le 10^6$

**Subtask #3 (50 points):** original constraints

### Example Input
```
1
7 7
3 1 6 7 2 5 4
1
2
3
4
5
6
7
```

### Example Output
```
0
1
1
2
1
0
0
```

### Explanation
**Example case 1:**
- Query 1: The algorithm works without any swaps.
- Query 2: One solution is to swap $A_2$ and $A_4$.
- Query 3: One solution is to swap $A_2$ and $A_6$.
- Query 4: One solution is to swap $A_2$ with $A_4$ and $A_5$ with $A_6$.
- Query 5: One solution is to swap $A_2$ and $A_4$.
- Query 6: The algorithm works without any swaps.
- Query 7: The algorithm works without any swaps.
