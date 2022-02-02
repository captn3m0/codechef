---
{"category_name":"medium","problem_code":"ENCODING","problem_name":"Encoding","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\n1 9\n2 97\n1 8\n2 12\n1 1\n1 8","output":"4681\n49\n36","explanation":"**Example case 2:** $f(8) = 8, f(9) = 9, f(10) = 10, f(11) = 10, f(12) = 12$","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"claudy","problem_tester":null,"date_added":"28-04-2019","tags":{"0":"aug19","1":"claudy","2":"claudy","3":"digit","4":"dynamic","5":"easy","6":"vijju123"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/ENCODING","time":{"view_start_date":1565602202,"submit_start_date":1565602202,"visible_start_date":1565602202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ENCODING","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG19/hindi/ENCODING.pdf), [Bengali](https://www.codechef.com/download/translated/AUG19/bengali/ENCODING.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG19/mandarin/ENCODING.pdf), [Russian](https://www.codechef.com/download/translated/AUG19/russian/ENCODING.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG19/vietnamese/ENCODING.pdf) as well.

Chef is trying to open the oven in his kitchen to cook some cookies. However, the oven is special ― you need a password to open it.

Let's define a function $f(x)$ for a positive integer $x$ as follows:
- Consider the decimal representation of $x$ (without leading zeros). Split it into the minimum number of contiguous subsequences of digits such that in each subsequence, all digits are identical.
- For each subsequence, look at its position in the original decimal representation of $x$. Let's say that the most significant digit it contained was the $e$-th digit, where $e=0$ corresponds to the least significant digit of $x$. For example, $388,822,442$ can be split into subsequences "3", "888", "22", "44", "2", where $e=7$ for the sequence "888" and $e=4$ for the sequence "22".
- The *value* of a subsequence which contains a digit $d$ repeated one or more times is $d \cdot 10^e$.
- $f(x)$ is the sum of values of these subsequences. For example, $f(388,822,442) = 3 \cdot 10^8 + 8 \cdot 10^7 + 2 \cdot 10^4 + 4 \cdot 10^2 + 2 \cdot 10^0$.

The oven has a screen which displays two long integers $L$ and $R$ (with $N_L$ and $N_R$ digits respectively, without leading zeros). The password is the sum of $f(x)$ for each $x$ between $L$ and $R$ inclusive.

Chef does not have a lot of time, so he asks for your help. Please find the password for the oven so that he can start cooking as fast as possible. Since this number could be very large, compute it modulo $10^9 + 7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N_L$ and $L$.
- The second line contains two space-separated integers $N_R$ and $R$.

### Output
For each test case, print a single line containing one integer ― the password.

### Constraints
- $1 \le T \le 10$
- $1 \le N_L, N_R \le 10^5$
- $1 \le L \le R \lt 10^{100,000}$
- $L$ and $R$ do not contain leading zeros

### Subtasks
**Subtask #1 (10 points):**
- $R - L \le 10^5$
- $R \lt 10^{18}$

**Subtask #2 (20 points):** $R \lt 10^{18}$

**Subtask #3 (70 points):** original constraints

### Example Input
```
3
1 9
2 97
1 8
2 12
1 1
1 8
```

### Example Output
```
4681
49
36
```

### Explanation
**Example case 2:** $f(8) = 8, f(9) = 9, f(10) = 10, f(11) = 10, f(12) = 12$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>