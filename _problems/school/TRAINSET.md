---
{"category_name":"school","problem_code":"TRAINSET","problem_name":"Select Training Set","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/iRsct8bFyoM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dpraveen_adm","problem_tester":"","date_added":"17-10-2019","tags":{"0":"dpraveen_adm"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TRAINSET","time":{"view_start_date":1136053800,"submit_start_date":1136053800,"visible_start_date":1136053800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TRAINSET","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a dataset consisting of $N$ items. Each item is a pair of a word and a boolean denoting whether the given word is a spam word or not.

We want to use this dataset for training our latest machine learning model. Thus we want to choose some subset of this dataset as training dataset. We want to make sure that there are no contradictions in our training set, i.e. there shouldn't be a word included in the training set that's marked both as spam and not-spam. For example item {"fck", 1}, and item {"fck, 0"} can't be present in the training set, because first item says the word "fck" is a spam, whereas the second item says it is not, which is a contradiction.

Your task is to select the maximum number of items in the training set.

Note that same pair of {word, bool} can appear multiple times in input. The training set can also contain the same pair multiple times.

### Input
- First line will contain $T$, number of test cases. Then the test cases follow.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains a string $w_i$, followed by a space and an integer(boolean) $s_i$, denoting the $i$-th item.

### Output
For each test case, output an integer corresponding to the maximum number of items that can be included in the training set in a single line.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 25,000$
- $1 \le |w_i| \le 5$ for each valid $i$
- $0 \le s_i \le 1$ for each valid $i$
- $w_1, w_2, \ldots, w_N$ contain only lowercase English letters

### Example Input
```
3
3
abc 0
abc 1
efg 1
7
fck 1
fck 0
fck 1
body 0
body 0
body 0
ram 0
5
vv 1
vv 0
vv 0
vv 1
vv 1
```

### Example Output
```
2
6
3
```

### Explanation
**Example case 1:** You can include either of the first and the second item, but not both. The third item can also be taken. This way the training set can contain at the very max 2 items.

**Example case 2:** You can include all the items except the second item in the training set.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>