---
{"category_name":"easy","problem_code":"KFOLD","problem_name":"K-Foldable String","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n8 2\r\n00011101\r\n6 2\r\n100111","output":"01100110\r\nIMPOSSIBLE","explanation":"**Example case 1:** If the given string \u002200011101\u0022 is rearranged to \u002201100110\u0022, it becomes $2$-foldable:\r\n- Initially, $S$ is \u002201100110\u0022.\r\n- After the first folding, it becomes \u0022100110\u0022.\r\n- After the second folding, it becomes \u00220110\u0022.\r\n- After the third folding, it becomes \u002210\u0022. This string has length $2$, so we are done.\r\n\r\n**Example case 2:** It is impossible to rearrange $S$ into a $2$-foldable string.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/n_oyM63UxQs","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pandey__ji","problem_tester":"","date_added":"16-08-2020","tags":{"0":"ad","1":"cook121","2":"math","3":"pandey__ji","4":"pandey__ji","5":"psychik","6":"simple"},"problem_difficulty_level":"Simple","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/KFOLD","time":{"view_start_date":1598208302,"submit_start_date":1598208302,"visible_start_date":1598208302,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=KFOLD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK121/hindi/KFOLD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK121/mandarin/KFOLD.pdf), [Russian](https://www.codechef.com/download/translated/COOK121/russian/KFOLD.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK121/vietnamese/KFOLD.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK121/bengali/KFOLD.pdf) as well

You are given a binary string $S$ with length $N$ and an integer $K$, which is a divisor of $N$. A string is said to be $K$*-foldable* if it can be changed to a string with length $K$ by repeating the following process without any *collisions* (defined below):
- Select the prefix of the current string $S$ with length $2K$. (Note that as long as the length of $S$ is greater than $K$, this prefix always exists.)
- For each $i$ ($1 \le i \le K$), check if the $2K-i+1$-th character of $S$ is equal to the $i$-th character of $S$ ― if they are not equal, there is a collision and the process is invalid.
- Erase the prefix of $S$ with length $K$.

Your goal is to reorder the characters of $S$ (possibly leaving this string unchanged) in such a way that the resulting string $S$ is a $K$-foldable string. Find a way to do that or determine that it is impossible. If there are multiple solutions, find the lexicographically smallest rearranged string which is $K$-foldable.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains a single string $S$ with length $N$.

### Output
For each test case, print a single line containing the smallest rearranged string or the string `"IMPOSSIBLE"` if it is impossible to rearrange $S$.

### Constraints
- $1 \le T \le 100$
- $1 \le K \le N \le 10^3$
- $N$ is divisible by $K$
- $S$ contains only characters '0' and '1'

### Example Input
```
2
8 2
00011101
6 2
100111
```

### Example Output
```
01100110
IMPOSSIBLE
```

### Explanation
**Example case 1:** If the given string "00011101" is rearranged to "01100110", it becomes $2$-foldable:
- Initially, $S$ is "01100110".
- After the first folding, it becomes "100110".
- After the second folding, it becomes "0110".
- After the third folding, it becomes "10". This string has length $2$, so we are done.

**Example case 2:** It is impossible to rearrange $S$ into a $2$-foldable string.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>