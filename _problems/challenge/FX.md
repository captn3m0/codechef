---
{"category_name":"challenge","problem_code":"FX","problem_name":"Crystals","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"TCL","41":"kotlin","42":"TEXT","43":"SCM chicken","44":"CLOJ","45":"COB","46":"FS"},"max_timelimit":0.229167,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"10-07-2009","tags":{"0":"admin"},"time":{"view_start_date":1249991973,"submit_start_date":1249991973,"visible_start_date":1249991667,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The Evil Magician of Byteland was performing evil magical experiments, and he has left you with an impressive collection of evil magical crystals which he produced. Honestly, you would be overjoyed to dispose of (or in other words: destroy) these crystals, but destroying a magical crystal is not so easy. To achieve thus, you need to connect three different crystals (red, green and blue) and cast some magic spell to destroy this particular triplet. Each magical crystal has its own mana level. You need a certain amount of your own mana to destroy the triplet, precisely equal to the product of the mana levels of the crystals in the triplet you are destroying. Fortunately, your crystals are all already grouped in triplets, and there are no leftovers (so it is possible to actually destroy all of them); unfortunately, the composition of the triplets is not necessarily optimal from the point of view of mana consumption. However, you are allowed to choose two crystals of the same color, and swap them within triplets (crystals become very unstable and hazardous when not part of a triplet, so you cannot perform any operations more complicated than swapping). But there is a catch (there always is, isn't there?): swapping crystals requires a magic spell -- a spell with a significant mana cost, and what makes matters worse, using this spell (as any other spell) on the crystals being swapped makes them accumulate more mana into their mana level (exactly by <strong>1</strong>). Try to minimize the amount of mana you need to use to destroy all the crystals!</p>
<h3>Input</h3>
<p>First, 2 &#8804; <var>n</var> &#8804; 10<sup>5</sup>, the number of crystals of each color. Then, 0 &#8804; <var>c</var> &#8804; 10<sup>4</sup>, the mana cost of the swapping spell. After that, <var>n</var> triplets of integers follow, the <var>i</var>th triplet consisting of 0 &#8804; <var>r</var><sub><var>i</var></sub> &#8804; 100,   0 &#8804; <var>g</var><sub><var>i</var></sub> &#8804; 100, 0 &#8804; <var>b</var><sub><var>i</var></sub> &#8804; 100, representing the initial mana levels of successive Red, Green and Blue crystals, respectively.</p>
<h3>Output</h3>
<p>First 0 &#8804; <var>t</var> &#8804; 10<sup>6</sup>, the number of swaps. Then, <var>t</var> descriptions of the swaps in the order in which they are applied, each of the form: 1&#8804;<var>p</var>&#8804;3, 1&#8804;<var>x</var>&#8804;<var>n</var>, 1&#8804;<var>y</var>&#8804;<var>n</var>, meaning a swap between crystals of the <var>x</var>th and <var>y</var>th triplets (<var>p</var>=1 stands for Red, 2 for Green, 3 for Blue).</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
3 10
1 1 1
5 5 5
10 10 10

<strong>Output:</strong>
2
1 1 3
3 1 2
<strong>Score:</strong>
11*1*6 + 5*5*2 + 2*10*10 + 10 + 10 = 336
</pre>
