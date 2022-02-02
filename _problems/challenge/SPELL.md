---
{"category_name":"challenge","problem_code":"SPELL","problem_name":"The Spelling Problem","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":null,"date_added":"7-10-2014","tags":{"0":"challenge","1":"nov14","2":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/SPELL","time":{"view_start_date":1416216600,"submit_start_date":1416216600,"visible_start_date":1416216600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/SPELL.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/SPELL.pdf">Russian</a>.</h3>
<p>Fedya and Alex are OI-ers. They live in different cities, but they like to write letters to each other, in which they discuss complicated data structure problems, contests, nice girls/ boys, animes and other not so important things.</p>
<p>Nevertheless, there is a problem, arising sometimes. Being quite young and impatient, Fedya is eager to send his just typed letter. Though everything is okay with it, but like any of us, Fedya sometimes makes some spelling mistakes in the typed text. Being a  perfectionist, Alex sometimes gets upset, when he sees mistakes in Fedya's letters.
</p>
<p>
More precisely, sometimes Fedya can following mistakes:</p>
<ul>
<li>to swap two letters;</li>
<li>to skip a letter;</li>
<li>to insert an irrelevant letter;</li>
<li>to mistype a letter in some of the words.</li>
</ul>
<p><br />Though, he is an intelligent guy and he never makes more than <b>one</b> mistake in a single typed word.</p>
<p>Fedya isn't really bad at spelling, so he will make mistakes in no more than 4% of the typed words.</p>
<p>Alex is a nice guy. In order to upset less, he has decided to write a program that will correct Fedya's mistakes. But this appeared to be not an easy task for him. So we ask you to help Alex.</p>
<p>Formally, you will be given a text. The text will be an English text with correct grammar and spelling. Somewhere in the text, the mistakes of some of the above kinds will be made. You need to provide the modified text that will contain as less mistakes as possible (see Grading section). In order to make our problem easier, we will give you a dictionary of English words. The most part of words will appear in the dictionary, but not all of them.</p>
<h3>Input</h3>
<p>The first line of input contains a single integer <b>D</b>, denoting the number of words in the dictionary. Then, <b>D</b> lines will follow, each will contain a dictionary word. The dictionary used is the same in all the test cases, and you can download it <a href="http://www.codechef.com/download/NOV14/SPELL_dict.txt">here</a>.</p>
<p>Then there is a line, containing lowercase English text, consisting of words and numbers. All the punctuation but dots, exclamation and question marks, commas and apostrophes will be removed. All the sentences always ends with dots, but the dot can also be used in shortings (like Mr., Mrs.) and abbreviations.</p>
<h3>Output</h3>
<p>Output the corrected text in the same format as it is given to you in the input.</p>
<h3>Grading</h3>
<p>You will not get any "Wrong Answer" verdict in this problem. The scoring mechanism works as follows:</p>
<ul>
<li>First, we split your output into the consecutive words of non-space symbols, that can't be extended by adding a symbol to the left, or to the right.</li>
<li>Then, we do a group-by-group comparison with the official outputs' groups.</li>
<li>If the current group was correct in the input, but in your output it is incorrect, your score for the test case decreases by <b>1</b>.</li>
<li>If the current group was incorrect in the input, but in your output it is correct, your score for the test cases increases by <b>3</b>.</li>
<li>We compare only the first <b>min{the number of groups in your output; the number of groups in the official output}</b> groups of symbols. So, you can output not all the text - that will possibly not enable you to score as much points as possible, but if you find it convenient, you can use it.</li>
<li>If your score for the test case is lower than <b>0</b>, it will be increased to <b>0</b>.</li>
<li>Your initial score for each test case equals to <b>100</b>. So, if you don't change the text at all, you will still receive some positive amount of points.</li>
</ul>
<p>As you can easily see, you should leave all the punctuation on its' places.
 </p>
<h3>Test Data Generation</h3>
<p>All the texts, given to you will be basically normal English texts (of any style) with mistakes in some words. The amount of mistaken words is about 4%. Basically, you should treat the mistakes as the one that had been made by a human.</p>
<p>Some test data sizes information:</p>
<ul>
<li>The <b>10%</b> of the test data will have the text of the size of approximately <b>10 MB</b>.</li>
<li>The additional <b>40%</b> of the test data will have the text of the size of <b>1</b> to <b>3 MB</b>.</li>
<li>The rest of the test data has texts of the size below <b>1 MB</b>.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
[dictionary declaration is omitted in this sample case]
thus is the sample text.

<b>Output:</b>
this is the sample text.
</pre><p> </p>
<h3>Explanation</h3>
<p>This answer will get a score of <b>103</b> points.</p>
