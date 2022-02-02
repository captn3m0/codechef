---
{"category_name":"easy","problem_code":"ARTBALAN","problem_name":"Art of Balance","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"prnjl_rai","problem_tester":null,"date_added":"28-01-2019","tags":{"0":"easy","1":"feb19","2":"greedy","3":"math","4":"prnjl_rai"},"editorial_url":"https://discuss.codechef.com/problems/ARTBALAN","time":{"view_start_date":1550050202,"submit_start_date":1550050202,"visible_start_date":1550050202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/FEB19TST/hindi/ARTBALAN.pdf), [Bengali](http://www.codechef.com/download/translated/FEB19TST/bengali/ARTBALAN.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/FEB19TST/mandarin/ARTBALAN.pdf), [Russian](http://www.codechef.com/download/translated/FEB19TST/russian/ARTBALAN.pdf), and [Vietnamese](http://www.codechef.com/download/translated/FEB19TST/vietnamese/ARTBALAN.pdf) as well.

"Everything in the universe is balanced. Every disappointment you face in life will be balanced by something good for you! Keep going, never give up."

Let's call a string *balanced* if all characters that occur in this string occur in it the same number of times.

You are given a string $S$; this string may only contain uppercase English letters. You may perform the following operation any number of times (including zero): choose one letter in $S$ and replace it by another uppercase English letter. Note that even if the replaced letter occurs in $S$ multiple times, only the chosen occurrence of this letter is replaced.

Find the minimum number of operations required to convert the given string to a balanced string.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$.

### Output
For each test case, print a single line containing one integer ― the minimum number of operations.

### Constraints
- $1 \le T \le 10,000$
- $1 \le |S| \le 1,000,000$
- the sum of $|S|$ over all test cases does not exceed $5,000,000$
- $S$ contains only uppercase English letters

### Subtasks
**Subtask #1 (20 points):**
- $T \le 10$
- $|S| \le 18$

**Subtask #2 (80 points):** original constraints

### Example Input
```
2
ABCB
BBC
```

### Example Output
```
1
1
```

### Explanation
**Example case 1:** We can change 'C' to 'A'. The resulting string is "ABAB", which is a balanced string, since the number of occurrences of 'A' is equal to the number of occurrences of 'B'.

**Example case 2:** We can change 'C' to 'B' to make the string "BBB", which is a balanced string.
