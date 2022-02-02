---
{"category_name":"medium","problem_code":"MORPH21","problem_name":"Isomorphic Morphism","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/E4_-qk2TWeg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"5-10-2020","tags":{"0":"ad","1":"cook123","2":"medium","3":"psychik","4":"sjshohag","5":"sjshohag"},"problem_difficulty_level":"Medium","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/MORPH21","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MORPH21","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK123/hindi/MORPH21.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK123/mandarin/MORPH21.pdf), [Russian](https://www.codechef.com/download/translated/COOK123/russian/MORPH21.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK123/vietnamese/MORPH21.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK123/bengali/MORPH21.pdf) as well.

*If I keep moving, they won't know |
I'll morph to someone else |
What they throw at me's too slow |
I'll morph to someone else |
I'm just a ghost |
I'll morph to someone else |
Defense mechanism mode!*

You are given two integer sequences $A_1, A_2, \ldots, A_N$ and $B_1, B_2, \ldots, B_N$ and an integer $K$. You may perform the following operation at most $3 \cdot N$ times:
- Select a contiguous subsequence of $A$ with length $K$. Let's denote this subsequence by $A_L, A_{L+1}, \ldots, A_{L+K-1}$.
- Create an integer sequence $S_1, S_2, \ldots, S_K$ which is *isomorphic* to the selected subsequence ― for each pair of integers $i$ and $j$ ($1 \le i, j \le K$), $S_i = S_j$ must hold if $A_{L-1+i} = A_{L-1+j}$ and $S_i \neq S_j$ must hold if $A_{L-1+i} \neq A_{L-1+j}$. In addition, $1 \le S_i \le 1,000$ must hold for each valid $i$.
- For each valid $i$, replace $A_{L-1+i}$ by $S_i$.

Is it possible to change the sequence $A$ to $B$? If it is possible, find a sequence of operations which morphs $A$ to $B$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.

### Output
For each test case:
- If it is impossible to morph $A$ to $B$ using no more than $3 \cdot N$ operations, print a single line containing the string `"NO"` (without quotes).
- Otherwise, start by printing a line containing the string `"YES"` (without quotes).
- Then, print a line containing a single integer $P$ ($0 \le P \le 3 \cdot N$) ― the number of operations you want to perform.
- Finally, print $P$ lines. Each of these lines should contain $K+1$ space-separated integers $L, S_1, S_2, \ldots, S_K$ describing an operation ($1 \le L \le N-K+1$; $1 \le S_i \le 1,000$ for each valid $i$).

If there are multiple solutions, you may find any one of them.

### Constraints
- $1 \le T \le 100$
- $1 \le K \le N \le 100$
- $1 \le A_i, B_i \le 1,000$ for each valid $i$

### Example Input
```
4
4 3
1 2 3 4
4 3 2 1
7 5
2 1 2 1 1 3 2
5 4 1 5 4 3 9 
6 4 
1 1 5 4 3 6
5 3 4 5 1 1
3 1
1 1 1
9 10 21
```

### Example Output
```
YES
2
1 4 3 2
2 3 2 1
NO
YES
3
2 3 4 1 6
1 5 3 4 5
3 4 5 1 1
YES
3
1 9
2 10
3 21
```

### Explanation
**Example case 1:** The state of the sequence after each operation is $[1, 2, 3, 4] \rightarrow [4, 3, 2, 4] \rightarrow [4, 3, 2, 1]$.

**Example case 3:** The state of the sequence after each operation is $[1, 1, 5, 4, 3, 6] \rightarrow [1, 3, 4, 1, 6, 6] \rightarrow [5, 3, 4, 5, 6, 6] \rightarrow [5, 3, 4, 5, 1, 1]$.

See the following animation for more clarity:

<img src = "https://codechef_shared.s3.amazonaws.com/download/Images/COOK123/MORPH21/morph720p.gif" width = "100%" height = "100%">

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>