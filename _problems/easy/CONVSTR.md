---
{"category_name":"easy","problem_code":"CONVSTR","problem_name":"Convert the String","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vivek_1998299","problem_tester":null,"date_added":"20-05-2020","tags":{"0":"easy","1":"greedy","2":"ltime84","3":"taran_1407","4":"vivek_1998299"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CONVSTR","time":{"view_start_date":1590858002,"submit_start_date":1590858002,"visible_start_date":1590858002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CONVSTR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME84/hindi/CONVSTR.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME84/bengali/CONVSTR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME84/mandarin/CONVSTR.pdf), [Russian](https://www.codechef.com/download/translated/LTIME84/russian/CONVSTR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME84/vietnamese/CONVSTR.pdf) as well.

Vivek was quite bored with the lockdown, so he came up with an interesting task. He successfully completed this task and now, he would like you to solve it.

You are given two strings $A$ and $B$, each with length $N$. Let's index the characters in each string from $0$ ― for each $i$ ($0 \le i \lt N$), the $i+1$-th characters of $A$ and $B$ are denoted by $A_i$ and $B_i$ respectively. You should convert $A$ to $B$ by performing operations of the following type:
- Choose a subset $S$ of the set $\{0, 1, \ldots, N-1\}$.
- Let $c$ be the alphabetically smallest character among $A_x$ for all $x \in S$.
- For each $x \in S$, replace $A_x$ by $c$.

You should find the smallest necessary number of operations or report that it is impossible to convert $A$ to $B$. If it is possible, you also need to find one way to convert $A$ to $B$ using this smallest number of operations. If there are multiple solutions, you may find any one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a single string $A$.
- The third line contains a single string $B$.

### Output
For each test case:
- If it is impossible to convert $A$ to $B$, print a single line containing the integer $-1$.
- Otherwise, first, print a line containing a single integer $K$ ― the minimum number of operations.
- Then, print $K$ lines describing the operations. Each of these lines should contain a positive integer $Z$, followed by a space and $Z$ pairwise distinct space-separated integers from the set $\{0, 1, \ldots, N-1\}$ ― the elements of $S$.

### Constraints
- $1 \le T \le 20$
- $1 \le N \le 10^3$
- $|A| = |B| = N$
- $A$ and $B$ contain only lowercase English letters

### Subtasks
**Subtask #1 (30 points):** $B$ contains only characters 'a' and 'b'

**Subtask #2 (70 points):** original constraints

### Example Input
```
3
5
abcab
aabab
3
aaa
aab
2
de
cd
```

### Example Output
```
2
3 1 2 4
3 0 1 3
-1
-1
```

### Explanation
**Example case 1:**
- First, we can choose $S = (1, 2, 4)$, so the character $c$ is 'b' and the string $A$ after this operation is "abbab".
- Then, we choose $S = (0, 1, 3)$, so $c$ is 'a', and $A$ becomes "aabab".
- There is no way to convert $A$ to $B$ in only one operation.

**Example case 2:** We can see that it is impossible to convert $A$ to $B$ since $c$ is always 'a'.

**Example case 3:** We can see again that it is impossible to convert $A$ to $B$ since $c$ cannot be 'c'.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>