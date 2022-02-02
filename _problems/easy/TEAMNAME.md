---
{"category_name":"easy","problem_code":"TEAMNAME","problem_name":"Team Name","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2\r\nsuf mas\r\n3\r\ngood game guys\r\n4\r\nhell bell best test","output":"2\r\n0\r\n2","explanation":"**Example case 1:** The good team names are (\u0022muf\u0022, \u0022sas\u0022) and (\u0022sas\u0022, \u0022muf\u0022).\r\n\r\n**Example case 2:** There are no good team names because all funny words start with \u0027g\u0027.\r\n\r\n**Example case 3:** The good team names are (\u0022hest\u0022, \u0022tell\u0022) and (\u0022tell\u0022, \u0022hest\u0022).","isDeleted":false}}},"video_editorial_url":"https://youtu.be/ney3HOVi_UA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sevlll","problem_tester":"","date_added":"8-12-2020","tags":{"0":"easy","1":"feb21","2":"sevlll"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TEAMNAME","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TEAMNAME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB21/hindi/TEAMNAME.pdf), [Bengali](https://www.codechef.com/download/translated/FEB21/bengali/TEAMNAME.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB21/mandarin/TEAMNAME.pdf), [Russian](https://www.codechef.com/download/translated/FEB21/russian/TEAMNAME.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB21/vietnamese/TEAMNAME.pdf) as well.

Сhef has assembled a football team! Now he needs to choose a name for his team. There are $N$ words in English that Chef considers *funny*. These words are $s_1, s_2, \dots, s_N$.

Chef thinks that a good team name should consist of two words such that they are not funny, but if we swap the first letters in them, the resulting words are funny. Note that under the given constraints, this means that a word is a non-empty string containing only lowercase English letters.

Can you tell Chef how many good team names there are?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated strings $s_1, s_2, \ldots, s_N$.

### Output
For each test case, print a single line containing one integer — the number of ways to choose a good team name.

### Constraints
- $1 \leq T \leq 100$
- $2 \leq N \leq 2 \cdot 10^4$
- $2 \leq |s_i| \leq 20$ for each valid $i$
- $s_1, s_2, \ldots, s_N$ contain only lowercase English letters
- $s_1, s_2, \ldots, s_N$ are pairwise distinct
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^4$

### Subtasks
**Subtask #1 (20 points):** $s_1, s_2, \ldots, s_N$ contain only letters 'a' and 'b'

**Subtask #2 (80 points):** original constraints

### Example Input
```
3
2
suf mas
3
good game guys
4
hell bell best test
```

### Example Output
```
2
0
2
```

### Explanation
**Example case 1:** The good team names are ("muf", "sas") and ("sas", "muf").

**Example case 2:** There are no good team names because all funny words start with 'g'.

**Example case 3:** The good team names are ("hest", "tell") and ("tell", "hest").

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>