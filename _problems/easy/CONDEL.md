---
{"category_name":"easy","problem_code":"CONDEL","problem_name":"Consecutive Deletions","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5 3\r\n1 0 1 0 1\r\n4 4\r\n1 1 0 1\r\n3 1\r\n1 1 0","output":"3\r\n6\r\n2","explanation":"**Example case 1:** The minimum cost is $3$ and it can be obtained using the following sequence of operations:\r\n- choose the subarray $[L,R] = [2,4]$ and set $A_3=0$ with cost $1$\r\n- choose the subarray $[1,3]$ and set $A_1=0$ with cost $1$\r\n- choose the subarray $[3,5]$ and set $A_5=0$ with cost $1$\r\n\r\n**Example case 2:** We have to choose the whole sequence ($[L,R] = [1,4]$) in each operation, so the total cost is $3+2+1=6$:\r\n- choose the subarray $[1,4]$ and set $A_1=0$ with cost $3$ \r\n- choose the subarray $[1,4]$ and set $A_2=0$ with cost $2$\r\n- choose the subarray $[1,4]$ and set $A_4=0$ with cost $1$\r\n\r\n**Example case 3:** The minimum cost is $2$ and it can be obtained using the following sequence of operations:\r\n- choose the subarray $[2,2]$ and set $A_2=0$ with cost $1$\r\n- choose the subarray $[1,1]$ and set $A_1=0$ with cost $1$","isDeleted":false}}},"video_editorial_url":"https://youtu.be/XimOy_C0JeI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"losmi247","problem_tester":"","date_added":"21-02-2021","tags":{"0":"cook127","1":"easy","2":"losmi247","3":"sliding","4":"subarray"},"problem_difficulty_level":"Easy","best_tag":"Sliding Window","editorial_url":"https://discuss.codechef.com/problems/CONDEL","time":{"view_start_date":1616351402,"submit_start_date":1616351402,"visible_start_date":1616351402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CONDEL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK127/mandarin/CONDEL.pdf), [Russian](https://www.codechef.com/download/translated/COOK127/russian/CONDEL.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK127/vietnamese/CONDEL.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK127/bengali/CONDEL.pdf) as well.

You are given a positive integer $K$ and a sequence $A_1, A_2, \ldots, A_N$. Initially, each element of this sequence is $0$ or $1$; your goal is to make all elements equal to $0$.

In order to do that, you may perform the following operation any number of times:
- Choose a subarray (a contiguous subsequence) with length $K$, i.e. choose two indices $L$ and $R$ such that $1 \le L \le R \le N$ and $R-L+1 = K$.
- Choose one element of that subarray and change it to $0$, i.e. choose an index $P$ such that $L \le P \le R$ and change $A_P$ to $0$.
- The cost of this operation is the sum of this subarray $A_L + A_{L+1} + \ldots + A_R$ before $A_P$ is changed.

Find the minimum total cost (sum of costs of individual operations) of making all elements of $A$ equal to $0$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the minimum cost of turning all elements of $A$ into zeros. 

### Constraints
- $1 \le T \le 200$
- $1 \le K \le N \le 2 \cdot 10^5$
- $0 \le A_i \le 1$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $4 \cdot 10^5$

### Example Input
```
3
5 3
1 0 1 0 1
4 4
1 1 0 1
3 1
1 1 0
```

### Example Output
```
3
6
2
```

### Explanation
**Example case 1:** The minimum cost is $3$ and it can be obtained using the following sequence of operations:
- choose the subarray $[L,R] = [2,4]$ and set $A_3=0$ with cost $1$
- choose the subarray $[1,3]$ and set $A_1=0$ with cost $1$
- choose the subarray $[3,5]$ and set $A_5=0$ with cost $1$

**Example case 2:** We have to choose the whole sequence ($[L,R] = [1,4]$) in each operation, so the total cost is $3+2+1=6$:
- choose the subarray $[1,4]$ and set $A_1=0$ with cost $3$ 
- choose the subarray $[1,4]$ and set $A_2=0$ with cost $2$
- choose the subarray $[1,4]$ and set $A_4=0$ with cost $1$

**Example case 3:** The minimum cost is $2$ and it can be obtained using the following sequence of operations:
- choose the subarray $[2,2]$ and set $A_2=0$ with cost $1$
- choose the subarray $[1,1]$ and set $A_1=0$ with cost $1$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>