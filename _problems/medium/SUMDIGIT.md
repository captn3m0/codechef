---
{"category_name":"medium","problem_code":"SUMDIGIT","problem_name":"Sum of Digits","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"div5252","problem_tester":"","date_added":"16-12-2020","tags":{"0":"div5252","1":"greedy","2":"inequalities","3":"ltime91","4":"medium","5":"taran_1407"},"problem_difficulty_level":"Medium-Hard","best_tag":"Medium Hard","editorial_url":"https://discuss.codechef.com/problems/SUMDIGIT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SUMDIGIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME91/hindi/SUMDIGIT.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME91/bengali/SUMDIGIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME91/mandarin/SUMDIGIT.pdf), [Russian](https://www.codechef.com/download/translated/LTIME91/russian/SUMDIGIT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME91/vietnamese/SUMDIGIT.pdf) as well.

Let $S(N)$ denote the sum of digits of a positive integer $N$. You are given three positive integers $X$, $Y$ and $Z$. Consider all triples of positive integers $(A, B, C)$ such that:
- $S(A+B)=X$
- $S(B+C)=Y$
- $S(C+A)=Z$

Your task is to find the triple which maximises $S(A+B+C)$ and the triple which minimises $S(A+B+C)$. Specifically, you are given an additional integer $P$ with the following meaning:
- If $P = 0$, find the maximum value of $S(A+B+C)$ and one triple $(A, B, C)$ corresponding to this maximum value.
- If $P = 1$, find the minimum value of $S(A+B+C)$ and one triple $(A, B, C)$ corresponding to this minimum value.

If there are multiple solutions, you may find any one of them.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains four space-separated integers $X$, $Y$, $Z$ and $P$.

### Output
For each test case, print a single line containing four space-separated integers — the minimum or maximum value of $S$ and the corresponding values of $A$, $B$ and $C$.

$A$, $B$ and $C$ should be printed without leading zeros. The number of digits in each of $A$, $B$ and $C$ should not exceed $5 \cdot 10^5$. The total number of digits in the integers $A$, $B$ and $C$ in all test cases should not exceed $10^7$.

### Constraints
- $1 \leq T \leq 10^5$
- $2 \leq X,Y,Z \leq 10^5$
- $0 \leq P \leq 1$
- the sum of $X$ over all test cases does not exceed $10^6$
- the sum of $Y$ over all test cases does not exceed $10^6$
- the sum of $Z$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (25 points):**
- $P=0$
- $10 \le X,Y,Z \le 100$
- the sum of $X$ over all test cases does not exceed $10^3$
- the sum of $Y$ over all test cases does not exceed $10^3$
- the sum of $Z$ over all test cases does not exceed $10^3$

**Subtask #2 (25 points):** $P=0$

**Subtask #3 (25 points):**
- $P=1$
- $10 \le X,Y,Z \le 100$
- the sum of $X$ over all test cases does not exceed $10^3$
- the sum of $Y$ over all test cases does not exceed $10^3$
- the sum of $Z$ over all test cases does not exceed $10^3$

**Subtask #4 (25 points):** $P=1$

### Example Input
```
3
2 2 2 0
2 2 2 1
6 6 5 1
```

### Example Output
```
21 5455 95545 4555
3 1 1 10
4 25 80 25
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>