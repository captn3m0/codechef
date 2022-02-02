---
{"category_name":"easy","problem_code":"SKMP","problem_name":"Smallest KMP","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\nakramkeeanany\r\naka\r\nsupahotboy\r\nbohoty\r\ndaehabshatorawy\r\nbadawy","output":"aaakaeekmnnry\r\nabohotypsu\r\naabadawyehhorst","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"triplem5ds","problem_tester":"","date_added":"23-07-2020","tags":{"0":"aug20","1":"daniel_1999","2":"easy","3":"hashing","4":"observation","5":"rishup_nitdgp","6":"triplem5ds","7":"triplem5ds"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SKMP","time":{"view_start_date":1597656602,"submit_start_date":1597656602,"visible_start_date":1597656602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SKMP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG20/hindi/SKMP.pdf), [Bengali](https://www.codechef.com/download/translated/AUG20/bengali/SKMP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG20/mandarin/SKMP.pdf), [Russian](https://www.codechef.com/download/translated/AUG20/russian/SKMP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG20/vietnamese/SKMP.pdf) as well.

Chef has a string $S$. He also has another string $P$, called *pattern*. He wants to find the pattern in $S$, but that might be impossible. Therefore, he is willing to reorder the characters of $S$ in such a way that $P$ occurs in the resulting string (an anagram of $S$) as a substring.

Since this problem was too hard for Chef, he decided to ask you, his genius friend, for help. Can you find the lexicographically smallest anagram of $S$ that contains $P$ as substring?

Note: A string $B$ is a substring of a string $A$ if $B$ can be obtained from $A$ by deleting several (possibly none or all) characters from the beginning and several (possibly none or all) characters from the end.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single string $S$.
- The second line contains a single string $P$.

### Output
For each test case, print a single line containing one string ― the smallest anagram of $S$ that contains $P$.

### Constraints
- $1 \le T \le 10$
- $1 \le |P| \le |S| \le 10^5$
- $S$ and $P$ contain only lowercase English letters
- there is at least one anagram of $S$ that contains $P$

### Subtasks
**Subtask #1 (20 points):** $|S| \le 1,000$

**Subtask #2 (80 points):** $|S| \le 10^5$

### Example Input
```
3
akramkeeanany
aka
supahotboy
bohoty
daehabshatorawy
badawy
```

### Example Output
```
aaakaeekmnnry
abohotypsu
aabadawyehhorst
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>