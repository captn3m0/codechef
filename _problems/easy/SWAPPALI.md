---
{"category_name":"easy","problem_code":"SWAPPALI","problem_name":"Swapping to Palindrome","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n4\r\nabab\r\n5\r\nacbba\r\n5\r\naaaab","output":"YES\r\n1\r\nYES\r\n1\r\nNO","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"27-02-2020","tags":{"0":"admin3","1":"easy","2":"greedy","3":"ltime81","4":"tmwilliamlin"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SWAPPALI","time":{"view_start_date":1582995602,"submit_start_date":1582995602,"visible_start_date":1582995602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SWAPPALI","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME81/hindi/SWAPPALI.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME81/bengali/SWAPPALI.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME81/mandarin/SWAPPALI.pdf), [Russian](https://www.codechef.com/download/translated/LTIME81/russian/SWAPPALI.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME81/vietnamese/SWAPPALI.pdf) as well.

You are given a string $S$ with length $N$ and you should change it to a palindrome using a sequence of zero or more operations. In one operation, you should choose two adjacent elements of $S$ (two characters) and swap them; however, neither of these elements may be used in any other operation.

Find the minimum number of operations you have to perform in order to change the string $S$ into a palindrome, or determine that it is impossible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a single string $S$ with length $N$.

### Output
For each test case:
- If it is impossible to make the string $S$ a palindrome, print a single line containing the string `"NO"` (without quotes).
- Otherwise, print two lines. The first of these lines should contain the string `"YES"` (without quotes). The second line should contain a single integer ― the minimum required number of operations.

### Constraints
- $1 \le T \le 10,000$
- $1 \le N \le 10^5$
- $S$ contains only lowercase English letters
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $N \le 10^3$
- $S$ contains only characters 'a' and 'b'
- the sum of $N$ over all test cases does not exceed $10^4$

**Subtask #2 (50 points):** original constraints

### Example Input
```
3
4
abab
5
acbba
5
aaaab
```

### Example Output
```
YES
1
YES
1
NO
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>